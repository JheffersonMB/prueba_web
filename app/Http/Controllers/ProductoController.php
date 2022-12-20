<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Str; //Extencion para importar imagen
use Illuminate\Support\Facades\File;//extencion para eliminar imagen
class ProductoController extends Controller
{
  
    public function index()
    {
       

        $productos = Producto::join('categorias','productos.id_categoria','=','categorias.id')
            ->select('productos.id','productos.nombre_producto','productos.descripcion_producto',
            'productos.precio_producto','productos.stock_producto','productos.id_categoria','categorias.nombre_categoria as categoria')
            ->where('productos.estado','=',1)->get();

        return view('productos.index',compact('productos'));

      

    }

    
    public function create()
    {
        $categorias=Categoria::all()->where('estado',1);
        return view('productos.create',compact('categorias'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre_producto'=>'required',
            'descripcion_producto'=>'required',
            'precio_producto'=>'required',
            'id_categoria'=>'required',
            'img_producto' => 'image|mimes:jpg,jpeg|max:2048'
        ]);
        $producto = new Producto();
        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion_producto = $request->descripcion_producto;
        $producto->precio_producto = $request->precio_producto;
        $producto->id_categoria = $request->id_categoria;
        $producto->save();
        //script para subir una imagen
        if ($request->hasFile("img_producto")) 
        {//existe un campo de tipo file?
            $imagen = $request->file("img_producto"); //almacenar imagen en variable
            $nombreimagen = Str::slug($producto->id).".".$imagen->guessExtension();//insertar parametro del nombre de imagen
            $ruta = public_path("img/productos/");//guardar en esa ruta
            $imagen->move($ruta,$nombreimagen); //mover la imagen es esa ruta y con ese nombre

            //copy($imagen->getRealPath(),$ruta.$nombreimagen); copiar imagen un una ruta
        }
        return redirect('/producto');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias=Categoria::all()->where('estado',1);
        return view('productos.editar',compact('producto','categorias'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_producto'=>'required',
            'descripcion_producto'=>'required',
            'precio_producto'=>'required',
            'id_categoria'=>'required',
            'img_producto' => 'image|mimes:jpg,jpeg|max:2048'
        ]);
        
        $producto = Producto::findOrFail($id);
       
        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion_producto = $request->descripcion_producto;
        $producto->precio_producto = $request->precio_producto;
        $producto->id_categoria = $request->id_categoria;
     
        $producto->update();

        //script para subir editar una imagen
        if ($request->hasFile("img_producto")) 
        {
            $image_path = public_path("img/productos/{$request->id}.jpg");
            if (File::exists($image_path)) {
                File::delete($image_path);  //eliminar imagen existente
            }
            $imagen = $request->file("img_producto");
            $nombreimagen =  $request->id.".jpg";
            $ruta = public_path("img/productos/");
            $imagen->move($ruta,$nombreimagen);
        }
        
        return redirect('/producto');//IR A ESA RUTA
    }

   
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->estado = 0;
        $producto->update();
        $productos = Producto::all()->where('estado',1);
        return view('productos.index',compact('productos'));
    }

    
    public function create_pedido()
    {
        $userId = auth()->user()->id;
        
        // $iduser=Auth::user()->id;
        $cliente=Cliente::all();
        $cliente=$cliente->where('id_usuario',$userId)->first();
        // dd( $cliente );

        return view('checkout',compact('cliente'));
        //return view('checkout');
    }



}
