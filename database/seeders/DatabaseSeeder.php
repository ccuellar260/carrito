<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Str; //para usar en el numero randon

use App\Models\User; //modelo user
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\ProductoCaja;
use App\Models\ProductoSelect;
use App\Models\SelectOpcion;
use App\Models\TipoCaja;
use App\Models\TipoSelect;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = new User();
        $user->id = '1';
        $user->name = 'ccuellar7';
        $user->email = 'ccuellar7@gmail.com';
        $user->nombre = 'Cristhian';
        $user->apellido = 'Cuellar';
        $user->password =  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $user->remember_token =  Str::random(10); //numero randon de 10 dig
        $user->save();
        // $user->createAsStripeCustomer();

        // $this->call(CategoriaSeeder::class);
        // $this->call(ProductoSeeder::class);
        // \App\Models\Producto::factory(8)->create();

        // $c = new Categoria();
        // $c->id = 1 ;
        // $c->nombre = 'Combo & Promociones ';
        // $c->slug = Str::slug('Combo & Promociones ');
        // $c->save();

        $c = new Categoria();
        $c->id = 2 ;
        $c->nombre = 'Baldes de alitas ';
        $c->slug = Str::slug('Baldes de alitas ');
        $c->save();


        $c = new Categoria();
        $c->id = 3 ;
        $c->nombre = 'Pollo a la Lenia & Broated ';
        $c->slug = Str::slug('Pollo a la Lenia & Broated ');
        $c->save();


        $c = new Categoria();
        $c->id = 4 ;
        $c->nombre = 'Ensaladas ';
        $c->slug = Str::slug('Ensaladas ');
        $c->save();

        $c = new Categoria();
        $c->id = 5 ;
        $c->nombre = 'Bebidas ';
        $c->slug = Str::slug('Bebidas ');
        $c->save();

        $p = new Producto();
        $p->nombre = 'Pollo Economico ';
        $p->descripcion = 'Pollo Economico ';
        $p->slug = Str::slug('Combo & Promociones ');
        $p->imagen =('pollo1.jpg');
        $p->precio = 15.0;
        $p->id_categoria = 3;
        $p->save();

        $p = new Producto();
        $p->nombre = 'Pollo Cuarto Lenia ';
        $p->descripcion = 'Pollo Cuarto Lenia';
        $p->slug = Str::slug('Pollo Cuarto Lenia ');
        $p->imagen =('pollo2.jpeg');
        $p->precio = 20;
        $p->id_categoria = 3;
        $p->save();


        $p = new Producto();
        $p->nombre = 'Pollo Entero Lenia ';
        $p->descripcion = 'Pollo Entero Lenia';
        $p->slug = Str::slug('Pollo Entero Lenia ');
        $p->imagen =('pollo3.jpeg');
        $p->precio = 40;
        $p->id_categoria = 3;
        $p->save();


        $p = new Producto();
        $p->nombre = 'Alitas de pollo ';
        $p->descripcion = 'Alitas de pollo';
        $p->slug = Str::slug('Alitas de pollo ');
        $p->imagen =('alitas.jpg');
        $p->precio = 10;
        $p->id_categoria = 2;
        $p->save();



        $p = new Producto();
        $p->nombre = 'Coca Cola  ';
        $p->descripcion = 'Coca Cola ';
        $p->slug = Str::slug('Coca Cola  ');
        $p->imagen =('Coca-Cola.jpg');
        $p->precio = 20;
        $p->id_categoria = 5;
        $p->save();


        $p = new TipoSelect();
        $p->id = 1;
        $p->nombre = 'Extra_Presa';
        $p->tipo= 'normal';
        $p->cantidad = 'unica';
        $p->save();

        $p = new SelectOpcion();
        $p->id_tipo_select='1';
        $p->precio='10';
        $p->nombre='pecho';
        $p->save();

        $p = new SelectOpcion();
        $p->id_tipo_select='1';
        $p->precio='5';
        $p->nombre='pierna';
        $p->save();


        $p = new SelectOpcion();
        $p->id_tipo_select='1';
        $p->precio='5';
        $p->nombre='contra';
        $p->save();


        $p = new TipoSelect();
        $p->id = 2;
        $p->nombre = 'Cubiertos';
        $p->tipo= 'radio';
        $p->cantidad= 'unica';
        $p->save();

        $p = new SelectOpcion();
        $p->id_tipo_select='2';
        $p->nombre='si';
        $p->save();

        $p = new SelectOpcion();
        $p->id_tipo_select='2';
        $p->nombre='no';
        $p->save();

        $p = new TipoSelect();
        $p->id = 3;
        $p->nombre ='Guarniciones';
        $p->tipo= 'radio';
        $p->cantidad= 'unica';
        $p->save();

        $p = new SelectOpcion();
        $p->id_tipo_select='3';
        $p->nombre='arroz';
        $p->save();


        $p = new SelectOpcion();
        $p->id_tipo_select='3';
        $p->nombre='papas';
        $p->save();

        $p = new SelectOpcion();
        // $p->id = 1;
        $p->id_tipo_select='3';
        $p->nombre='lenteja';
        $p->save();

        $p = new TipoCaja();
        $p->id = 1;
        $p->nombre='Cantidad';
        $p->tipo='chica';
        $p->tipo_letras='number';
        $p->valor='1';
        $p->save();

        $p = new TipoCaja();
        $p->id = 2;
        $p->nombre='Nota';
        $p->tipo='grande';
        $p->tipo_letras='text';
        $p->valor='';
        $p->save();

        //seleccionar
        $prod = Producto::get();
        foreach ($prod as $p) {
            $x = new ProductoCaja();
            $x->id_producto = $p->id;
            $x->id_caja = 1;
            $x->save();

            if ($p->id_categoria == 3) {
                //poner una nota y algunos selectores
                $x = new ProductoSelect();
                $x->id_producto = $p->id;
                $x->id_select = 1;
                $x->save();

                $x = new ProductoSelect();
                $x->id_producto = $p->id;
                $x->id_select = 2;
                $x->save();

                $x = new ProductoSelect();
                $x->id_producto = $p->id;
                $x->id_select = 3;
                $x->save();

                $x = new ProductoCaja();
                $x->id_producto = $p->id;
                $x->id_caja = 2;
                $x->save();

            }
        };




    }
}
