<?php include 'header.php'; ?>

<?php
// Mock Data for Standalone Version
$posts = [
    [
        'id' => 1,
        'title' => 'Gobierno anuncia nuevas medidas económicas para el 2024',
        'link' => '#',
        'date' => date('d F Y'),
        'author' => 'Carlos López',
        'excerpt' => 'El ministro de economía presentó esta mañana el nuevo plan de reactivación que incluye incentivos fiscales para pequeñas empresas.'
    ],
    [
        'id' => 2,
        'title' => 'Avance tecnológico: Inteligencia Artificial en la medicina',
        'link' => '#',
        'date' => date('d F Y', strtotime('-1 day')),
        'author' => 'Ana Martínez',
        'excerpt' => 'Nuevos algoritmos permiten detectar enfermedades con una precisión del 99% en etapas tempranas, revolucionando el diagnóstico médico.'
    ],
    [
        'id' => 3,
        'title' => 'La selección nacional inicia su entrenamiento',
        'link' => '#',
        'date' => date('d F Y', strtotime('-2 days')),
        'author' => 'Deportes Redacción',
        'excerpt' => 'Con miras al próximo mundial, el equipo se concentra en el centro de alto rendimiento para iniciar su preparación física.'
    ]
];
?>

<main class="max-w-4xl mx-auto px-4 py-12">
    <?php if ( !empty($posts) ) : foreach ( $posts as $post ) : ?>
        <article id="post-<?php echo $post['id']; ?>" class="mb-12 border-b border-stone-200 pb-8">
            <h1 class="text-3xl font-serif font-bold text-slate-900 mb-4 hover:text-blue-800 transition-colors">
                <a href="<?php echo $post['link']; ?>"><?php echo $post['title']; ?></a>
            </h1>
            <div class="flex items-center text-xs text-slate-500 mb-4 space-x-2">
                <span><?php echo $post['date']; ?></span>
                <span>•</span>
                <span><?php echo $post['author']; ?></span>
            </div>
            <div class="prose max-w-none text-slate-600 leading-relaxed font-sans">
                <p><?php echo $post['excerpt']; ?></p>
            </div>
            <a href="<?php echo $post['link']; ?>" class="text-blue-800 font-bold mt-4 inline-block hover:underline">
                Leer noticia completa &rarr;
            </a>
        </article>
    <?php endforeach; else : ?>
        <div class="text-center py-12">
            <h2 class="text-2xl font-bold text-slate-700">No se encontró contenido</h2>
            <p class="text-slate-500">Intenta buscar en otra sección.</p>
        </div>
    <?php endif; ?>
</main>

<?php include 'footer.php'; ?>