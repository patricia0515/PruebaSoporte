<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = new Area();
        $area->name = "Devops";
        $area->descripcion = "Servicio de desarrollo con personal experimentado en múltiples lenguajes, herramientas y plataformas, para la ejecución de sus proyectos.";
        $area->save();

        $area2 = new Area();
        $area2->name = "DBA";
        $area2->descripcion = "Un administrador de bases de datos es aquel profesional que administra las tecnologías de la información y la comunicación, siendo responsable de los aspectos técnicos, tecnológicos, científicos, inteligencia de negocios y legales de bases de datos, y de la calidad de datos.​";
        $area2->save();

        $area3 = new Area();
        $area3->name = "Analista de negocio";
        $area3->descripcion = "El analista de negocio o business analyst es la persona que posee conocimientos técnicos sobre la construcción de sistemas informáticos y al mismo tiempo comprende y está al corriente de las necesidades del usuario que requiere de esos sistemas para realizar su trabajo.";
        $area3->save();

        $area4 = new Area();
        $area4->name = "UX - UI";
        $area4->descripcion = "El diseño de interfaz de usuario o ingeniería de la interfaz es el resultado de definir la forma, función, utilidad, ergonomía, imagen de marca y otros aspectos que afectan a la apariencia externa de las interfaces de usuario en sistemas de todo tipo.";
        $area4->save();

        $area5 = new Area();
        $area5->name = "Back End";
        $area5->descripcion = "El backend es la parte del desarrollo web que se encarga de que toda la lógica de una página web  funcione. Se trata del conjunto de acciones que pasan en una web pero que no vemos como, por ejemplo, la comunicación con el servidor.";
        $area5->save();

        $area6 = new Area();
        $area6->name = "Movíl";
        $area6->descripcion = "Un sistema operativo móvil o SO móvil es un conjunto de programas de bajo nivel que permite la abstracción de las peculiaridades del hardware específico del teléfono móvil y, provee servicios a las aplicaciones móviles, que se ejecutan sobre él.";
        $area6->save();

        $area7 = new Area();
        $area7->name = "RPA";
        $area7->descripcion = "MONTECHELO te ofrece la automatización de procesos mediante RPA, generando ahorros de costos significativos al aumentar la productividad y la calidad de los procesos.";
        $area7->save();

        $area8 = new Area();
        $area8->name = "Support and Implementation";
        $area8->descripcion = "MONTECHELO, brinda como servicio la mesa de ayuda, siendo un contacto personalizado con nuestros clientes. Se da soporte considerando las prioridades y niveles acordades garantizando la operatividad y funcionamiento de los servicios.";
        $area8->save();
    }
}
