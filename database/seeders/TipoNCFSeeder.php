<?php

namespace Database\Seeders;

use App\Models\TipoNcf;
use Illuminate\Database\Seeder;

class TipoNCFSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoNcf::create([
            'codigo_ncf' => '01',
            'nombre_ncf' => 'FACTURAS CON VALOR DE CREDITO FISCAL O QUE SUSTENTAN COSTOS Y GASTOS',
            'parte_fija' => 'B',
            'ultimo_numero' => '0',
            'nombre_corto' => 'FACTURAS QUE GENERAN CREDITO FISCAL'
        ]);

        TipoNcf::create([
            'codigo_ncf' => '02',
            'nombre_ncf' => 'FACTURAS A CONSUMIDORES FINALES (SIN VALOR DE CREDITO FISCAL)',
            'parte_fija' => 'B',
            'ultimo_numero' => '0',
            'nombre_corto' => 'FACTURAS A CONSUMIDORES FINALES'
        ]);


        TipoNcf::create([
            'codigo_ncf' => '03',
            'nombre_ncf' => 'NOTAS DE DEBITO',
            'parte_fija' => 'B',
            'ultimo_numero' => '0',
            'nombre_corto' => 'NOTAS DE DEBITO'
        ]);

        TipoNcf::create([
            'codigo_ncf' => '04',
            'nombre_ncf' => 'NOTAS DE CREDITO',
            'parte_fija' => 'B',
            'ultimo_numero' => '0',
            'nombre_corto' => 'NOTAS DE CREDITO'
        ]);

        TipoNcf::create([
            'codigo_ncf' => '11',
            'nombre_ncf' => 'REGISTRO DE PROVEEDORES INFORMALES',
            'parte_fija' => 'B1',
            'ultimo_numero' => '0',
            'nombre_corto' => 'REGISTRO DE PROVEEDORES INFORMALES'
        ]);

        TipoNcf::create([
            'codigo_ncf' => '12',
            'nombre_ncf' => 'REGISTRO UNICO DE INGRESOS',
            'parte_fija' => 'B',
            'ultimo_numero' => '0',
            'nombre_corto' => 'REGISTRO UNICO DE INGRESOS'
        ]);

        TipoNcf::create([
            'codigo_ncf' => '13',
            'nombre_ncf' => 'REGISTRO DE GASTOS MENORES',
            'parte_fija' => 'B',
            'ultimo_numero' => '0',
            'nombre_corto' => 'REGISTRO DE GASTOS MENORES'
        ]);


        TipoNcf::create([
            'codigo_ncf' => '14',
            'nombre_ncf' => 'REGISTRO DE OPERACIONES PARA EMPRESAS ACOGIDAS A REGIMENES ESPECIALES DE TRIBUTACION',
            'parte_fija' => 'B',
            'ultimo_numero' => '0',
            'nombre_corto' => 'REG. PARA EMPRESA ESPEC. DE TRIBUTACION'
        ]);

        TipoNcf::create([
            'codigo_ncf' => '15',
            'nombre_ncf' => 'REGISTRO DE OPERACIONES PARA EMPRESAS ACOGIDAS A REGIMENES ESPECIALES DE TRIBUTACION',
            'parte_fija' => 'B',
            'ultimo_numero' => '0',
            'nombre_corto' => 'REG. PARA EMPRESA ESPEC. DE TRIBUTACION'
        ]);
    }
}
