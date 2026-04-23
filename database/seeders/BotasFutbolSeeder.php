<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class BotasFutbolSeeder extends Seeder
{
    /**
     * Poblar la base de datos con marcas (categorías) y modelos (productos)
     * de botas de fútbol basados en tenisfutbol.json
     */
    public function run(): void
    {
        // Limpiar tablas en orden correcto para evitar errores de FK
        Product::query()->delete();
        Category::query()->delete();

        $data = [
            [
                'categoria' => [
                    'name'        => 'Nike',
                    'description' => 'Botas y calzado deportivo de la marca Nike. Innovación, tecnología y rendimiento en cancha y entrenamiento.',
                ],
                'productos' => [
                    [
                        'name'            => 'Nike Mercurial Serie V',
                        'description'     => 'Bota de velocidad para césped natural',
                        'descriptionLong' => 'Las Nike Mercurial Serie V están diseñadas para jugadores explosivos que priorizan la velocidad. Cuentan con parte superior en Flyknit ultraligero y suela FG con tacos cónicos para máxima tracción en césped natural. Son las favoritas de delanteros y extremos de alto nivel.',
                        'price'           => 1899.99,
                        'boot_type'       => 'turf',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Nike Phantom Serie X',
                        'description'     => 'Bota de control y precisión técnica',
                        'descriptionLong' => 'Nike Phantom Serie X con zona de contacto texturizada Ghost Lace para un toque limpio y preciso. Ideal para mediocampistas técnicos que requieren control total del balón en superficies firmes. Su ajuste asimétrico distribuye mejor los puntos de presión.',
                        'price'           => 2150.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Nike Tiempo Legend',
                        'description'     => 'Bota clásica de cuero para jugadores técnicos',
                        'descriptionLong' => 'Fabricada en cuero canguro genuino, la Nike Tiempo Legend ofrece un toque suave y tradicional que ningún material sintético puede igualar. Favorita de jugadores de posición, playmakers y amantes del fútbol clásico. Combina herencia artesanal con tecnología moderna en la suela.',
                        'price'           => 1750.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Nike Phantom GT2',
                        'description'     => 'Bota de precisión y control',
                        'descriptionLong' => 'Phantom GT2 orientada al control y la precisión, con texturas estratégicas en la parte superior para mejorar el contacto con el balón y una entresuela que favorece la estabilidad en giros rápidos.',
                        'price'           => 2300.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Nike Vapor Elite',
                        'description'     => 'Bota ultraligera para velocidad',
                        'descriptionLong' => 'Diseñada para acelerar y mantener la máxima rapidez, la Vapor Elite ofrece materiales ultraligeros y una suela optimizada para la transferencia de potencia en sprints cortos y cambios de ritmo.',
                        'price'           => 2400.00,
                        'boot_type'       => 'speed',
                        'sole_type'       => 'AG',
                    ],
                    [
                        'name'            => 'Nike React Infinity Run',
                        'description'     => 'Zapatilla de running con gran amortiguación',
                        'descriptionLong' => 'Calzado de entrenamiento y running con entresuela React para retorno de energía y amortiguación. Ideal para corredores de largas distancias que buscan comodidad y estabilidad.',
                        'price'           => 2100.00,
                        'boot_type'       => 'running',
                        'sole_type'       => 'React',
                    ],
                ],
            ],
            [
                'categoria' => [
                    'name'        => 'Adidas',
                    'description' => 'Botas y calzado deportivo de la marca Adidas. Modelos icónicos y tecnología de vanguardia.',
                ],
                'productos' => [
                    [
                        'name'            => 'Adidas Predator Serie X',
                        'description'     => 'Bota de potencia con zonas de grip',
                        'descriptionLong' => 'Adidas Predator con elementos de goma texturizados en la zona de contacto para mayor control y efecto en el balón. Perfecta para mediocampistas creativos y cobertores de tiros libres. Su diseño aerodinámico y el sistema de ajuste preciso la hacen una de las más populares del mercado.',
                        'price'           => 2299.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Adidas Copa Mundial',
                        'description'     => 'El clásico más icónico del fútbol mundial',
                        'descriptionLong' => 'Ícono absoluto desde 1979. La Adidas Copa Mundial está fabricada en cuero canguro premium con suela de goma de alta durabilidad. Ha sido usada por leyendas del fútbol en múltiples Copas del Mundo. Para el jugador que valora la tradición, el toque y la calidad artesanal por encima de todo.',
                        'price'           => 1999.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Adidas Copa',
                        'description'     => 'Versión moderna del clásico Copa',
                        'descriptionLong' => 'La Adidas Copa actualiza el legado del Copa Mundial con materiales modernos y mayor ligereza, manteniendo el perfil bajo y el toque suave característico de la línea. Una opción accesible para jugadores que quieren el lujo del cuero con el diseño contemporáneo de Adidas.',
                        'price'           => 1450.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Adidas X Serie Velocidad',
                        'description'     => 'Bota de velocidad extrema de Adidas',
                        'descriptionLong' => 'La Adidas X está construida para los jugadores más rápidos del campo. Parte superior Speedskin ultradelgada para contacto directo con el balón y suela SpeedFrame con tacos de aceleración angular. Diseñada para superficies artificiales de última generación.',
                        'price'           => 2100.00,
                        'boot_type'       => 'speed',
                        'sole_type'       => 'AG',
                    ],
                    [
                        'name'            => 'Adidas Nemeziz',
                        'description'     => 'Bota para agilidad y cambios rápidos',
                        'descriptionLong' => 'Nemeziz diseñada para jugadores ágiles que realizan giros y movimientos cortos frecuentes. Sistema de ajuste tipo venda que proporciona soporte y libertad de movimiento.',
                        'price'           => 2000.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Adidas Ultraboost',
                        'description'     => 'Zapatilla de running con gran retorno de energía',
                        'descriptionLong' => 'Ultraboost con tecnología Boost en la entresuela que proporciona retorno de energía y comodidad para largas distancias. Ideal para entrenamientos y carreras de media y larga distancia.',
                        'price'           => 2200.00,
                        'boot_type'       => 'running',
                        'sole_type'       => 'Boost',
                    ],
                    [
                        'name'            => 'Adidas Predator Mutator',
                        'description'     => 'Versión avanzada del Predator con elementos de control',
                        'descriptionLong' => 'Mutator incluye tecnologías pensadas para mejorar el golpeo y el control del balón, con una estructura moderna que acompaña movimientos técnicos y potencia.',
                        'price'           => 2350.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                ],
            ],
            [
                'categoria' => [
                    'name'        => 'Puma',
                    'description' => 'Botas y calzado deportivo de la marca Puma. Diseño atrevido y rendimiento para jugadores versátiles.',
                ],
                'productos' => [
                    [
                        'name'            => 'Puma Future',
                        'description'     => 'Bota adaptable con sistema NetFit',
                        'descriptionLong' => 'Puma Future con sistema de agarre NetFit y cordones elásticos que permiten personalizar el ajuste según la forma del pie de cada jugador. Diseñada para futbolistas creativos que buscan comodidad, control y libertad de movimiento en cualquier superficie.',
                        'price'           => 1650.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Puma Racer',
                        'description'     => 'Bota ligera para superficies duras',
                        'descriptionLong' => 'La Puma Racer combina ligereza extrema con agarre seguro en superficies sintéticas y césped artificial. Su perfil aerodinámico y suela TF multitaco la hacen ideal para jugadores de banda, extremos y jugadores de contraataque que operan en canchas de pasto sintético.',
                        'price'           => 1380.00,
                        'boot_type'       => 'turf',
                        'sole_type'       => 'TF',
                    ],
                    [
                        'name'            => 'Puma Ode',
                        'description'     => 'Bota premium de edición especial Puma',
                        'descriptionLong' => 'La Puma Ode es una bota de edición limitada que combina materiales de alta gama con un diseño exclusivo y artístico. Para el jugador que busca destacar dentro y fuera del campo. Construida con capas de materiales premium que ofrecen durabilidad, toque y estilo únicos.',
                        'price'           => 1900.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Puma Ultra',
                        'description'     => 'Bota de velocidad extrema',
                        'descriptionLong' => 'La Puma Ultra es una bota ultraligera pensada para la velocidad absoluta, con materiales que reducen el peso y una suela diseñada para acelerar.',
                        'price'           => 1850.00,
                        'boot_type'       => 'speed',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Puma Future Z',
                        'description'     => 'Bota con respuesta ágil para cambios de ritmo',
                        'descriptionLong' => 'Future Z incorpora una estructura elástica en el mediopié que proporciona retorno de energía y soporte en movimientos explosivos. Ideal para jugadores dinámicos y creativos.',
                        'price'           => 1700.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                ],
            ],
            [
                'categoria' => [
                    'name'        => 'Salomon',
                    'description' => 'Calzado deportivo de alto rendimiento Salomon. Especialistas en terrenos exigentes con tecnología de tracción avanzada.',
                ],
                'productos' => [
                    [
                        'name'            => 'Salomon X Ultra',
                        'description'     => 'Calzado deportivo para terreno mixto',
                        'descriptionLong' => 'Salomon X Ultra con suela Contagrip de alta tracción diseñada para terrenos irregulares y mixtos. Sistema Quicklace para ajuste rápido y seguro. Excelente para entrenamientos en campo abierto, canchas de tierra y superficies donde la estabilidad lateral es prioritaria.',
                        'price'           => 2450.00,
                        'boot_type'       => 'medio',
                        'sole_type'       => 'Contagrip',
                    ],
                    [
                        'name'            => 'Salomon Sense',
                        'description'     => 'Calzado ligero para superficies naturales',
                        'descriptionLong' => 'El Salomon Sense ofrece una pisada natural y respuesta precisa en terrenos de tierra y pasto natural. Ultra ligero y con ventilación superior, es ideal para entrenamientos intensos en campo abierto donde el jugador necesita sentir el terreno y reaccionar con rapidez.',
                        'price'           => 2200.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'FG',
                    ],
                    [
                        'name'            => 'Salomon Speedcross',
                        'description'     => 'Zapatilla trail con tracción agresiva',
                        'descriptionLong' => 'Speedcross está pensada para terrenos blandos y técnicos. Su suela Contagrip con tacos profundos asegura agarre en barro, tierra y senderos complicados.',
                        'price'           => 2100.00,
                        'boot_type'       => 'trail',
                        'sole_type'       => 'Contagrip',
                    ],
                    [
                        'name'            => 'Salomon Trailster',
                        'description'     => 'Zapatilla trail versátil para largas distancias',
                        'descriptionLong' => 'Trailster combina amortiguación con protección y durabilidad, ideal para runners de trail que recorren largas distancias en terrenos variados.',
                        'price'           => 1950.00,
                        'boot_type'       => 'trail',
                        'sole_type'       => 'Contagrip',
                    ],
                ],
            ],
            [
                'categoria' => [
                    'name'        => 'On Running',
                    'description' => 'Calzado deportivo On Running. Tecnología CloudTec suiza para máxima amortiguación y retorno de energía en cada zancada.',
                ],
                'productos' => [
                    [
                        'name'            => 'On Ten',
                        'description'     => 'Bota deportiva con amortiguación CloudTec',
                        'descriptionLong' => 'On Ten con tecnología CloudTec en suela para absorción de impactos superior en cada pisada. Perfecta para jugadores que priorizan la comodidad articular en sesiones largas de entrenamiento. La parte superior de ingeniería de malla ofrece soporte sin sacrificar transpirabilidad.',
                        'price'           => 2600.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'CloudTec',
                    ],
                    [
                        'name'            => 'On Cloud',
                        'description'     => 'Calzado ultraligero para máximo rendimiento',
                        'descriptionLong' => 'On Cloud con cápsulas de aire en la suela para amortiguación eficiente y retorno de energía en cada paso. Diseño minimalista suizo de alto rendimiento. Favorito de atletas que buscan el equilibrio perfecto entre ligereza, protección y sensación de correr descalzo con soporte.',
                        'price'           => 2800.00,
                        'boot_type'       => 'general',
                        'sole_type'       => 'CloudTec',
                    ],
                    [
                        'name'            => 'On Cloudflyer',
                        'description'     => 'Zapatilla de running con gran soporte y amortiguación',
                        'descriptionLong' => 'Cloudflyer proporciona soporte adicional y amortiguación para corredores que necesitan estabilidad sin perder confort en largas distancias.',
                        'price'           => 2750.00,
                        'boot_type'       => 'running',
                        'sole_type'       => 'CloudTec',
                    ],
                    [
                        'name'            => 'On Cloudswift',
                        'description'     => 'Zapatilla urbana rápida y cómoda',
                        'descriptionLong' => 'Cloudswift está diseñada para corredores urbanos que buscan reactividad y protección, con una entresuela que combina retorno de energía y confort en recorridos diarios.',
                        'price'           => 2900.00,
                        'boot_type'       => 'running',
                        'sole_type'       => 'CloudTec',
                    ],
                ],
            ],
            [
                'categoria' => [
                    'name'        => 'New Balance',
                    'description' => 'Calzado New Balance. Enfocado en running y entrenamiento con tecnologías de amortiguación avanzada.',
                ],
                'productos' => [
                    [
                        'name'            => 'New Balance Fresh Foam 1080',
                        'description'     => 'Zapatilla de running con gran amortiguación',
                        'descriptionLong' => 'Fresh Foam 1080 ofrece una entresuela acolchada y uniforme que proporciona comodidad en largas distancias y buena respuesta en cada zancada.',
                        'price'           => 1800.00,
                        'boot_type'       => 'running',
                        'sole_type'       => 'FreshFoam',
                    ],
                    [
                        'name'            => 'New Balance Furon V6',
                        'description'     => 'Bota de fútbol ligera y para velocidad',
                        'descriptionLong' => 'Furon es una bota enfocada en acelerar y mantener velocidad, con una horma ceñida y suela diseñada para máxima respuesta en sprints.',
                        'price'           => 1650.00,
                        'boot_type'       => 'speed',
                        'sole_type'       => 'FG',
                    ],
                ],
            ],
            [
                'categoria' => [
                    'name'        => 'Asics',
                    'description' => 'Calzado Asics. Tradición en running con tecnologías Gel para amortiguación y estabilidad.',
                ],
                'productos' => [
                    [
                        'name'            => 'Asics Gel-Kayano',
                        'description'     => 'Zapatilla de running para estabilidad',
                        'descriptionLong' => 'Gel-Kayano ofrece soporte y amortiguación para corredores que necesitan control de pronación sin renunciar a la comodidad en tiradas largas.',
                        'price'           => 2000.00,
                        'boot_type'       => 'running',
                        'sole_type'       => 'Gel',
                    ],
                    [
                        'name'            => 'Asics DS Trainer',
                        'description'     => 'Zapatilla ligera para entrenamientos rápidos',
                        'descriptionLong' => 'DS Trainer está pensada para sesiones de velocidad y competiciones de corta-media distancia, combinando ligereza y respuesta.',
                        'price'           => 1700.00,
                        'boot_type'       => 'running',
                        'sole_type'       => 'Gel',
                    ],
                ],
            ],
        ];

        foreach ($data as $entry) {
            $category = Category::create($entry['categoria']);

            foreach ($entry['productos'] as $producto) {
                $producto['category_id'] = $category->id;
                Product::create($producto);
            }
        }

        $this->command->info('✓ ' . Category::count() . ' categorías creadas.');
        $this->command->info('✓ ' . Product::count() . ' productos creados.');
    }
}