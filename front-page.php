<?php get_header(); ?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-12">

    <!-- HERO SECTION -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 border-b border-stone-200 pb-8">
        
        <!-- HERO PRINCIPAL (1 post) -->
        <div class="lg:col-span-8">
            <?php
            $hero_query = new WP_Query( array( 'posts_per_page' => 1 ) );
            if ( $hero_query->have_posts() ) :
                while ( $hero_query->have_posts() ) : $hero_query->the_post();
            ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'group cursor-pointer' ); ?>>
                    <div class="relative overflow-hidden rounded-lg shadow-sm mb-4 aspect-video bg-stone-200">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php the_post_thumbnail_url( 'large' ); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <div class="w-full h-full bg-slate-200 flex items-center justify-center text-slate-500 font-bold tracking-widest">VISOR</div>
                            <?php endif; ?>
                        </a>
                        <div class="absolute bottom-0 left-0 p-6 text-white w-full bg-gradient-to-t from-black/80 to-transparent">
                            <span class="bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded mb-2 inline-block">
                                <?php 
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        echo esc_html( $categories[0]->name );
                                    }
                                ?>
                            </span>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <h1 class="font-serif text-3xl md:text-5xl font-black text-slate-900 leading-tight mb-3 group-hover:text-blue-800 transition-colors">
                            <?php the_title(); ?>
                        </h1>
                    </a>
                    <div class="font-sans text-slate-600 text-lg leading-relaxed mb-4">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="flex items-center text-xs text-slate-500 font-bold space-x-2">
                        <span class="text-slate-900"><?php the_author(); ?></span>
                        <span>•</span>
                        <span><?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' atrás'; ?></span>
                    </div>
                </article>
            <?php 
                endwhile; 
                wp_reset_postdata(); 
            endif; 
            ?>
        </div>

        <!-- SIDEBAR RÁPIDO (3 posts, offset 1) -->
        <aside class="lg:col-span-4 flex flex-col border-l border-stone-100 pl-0 lg:pl-8 space-y-6">
            <?php
            $sidebar_query = new WP_Query( array( 'posts_per_page' => 3, 'offset' => 1 ) );
            if ( $sidebar_query->have_posts() ) :
                while ( $sidebar_query->have_posts() ) : $sidebar_query->the_post();
            ?>
                <article <?php post_class( 'group cursor-pointer' ); ?>>
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="font-serif text-xl font-bold text-slate-800 mb-2 leading-snug group-hover:text-blue-700">
                            <?php the_title(); ?>
                        </h3>
                    </a>
                    <p class="text-sm text-slate-500 line-clamp-2"><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
                </article>
                <hr class="border-stone-100">
            <?php 
                endwhile; 
                wp_reset_postdata(); 
            endif; 
            ?>

            <div class="bg-stone-50 p-4 rounded border border-stone-100 mt-4">
                <span class="text-xs font-bold text-blue-800 uppercase mb-1 block">EDITORIAL</span>
                <h4 class="font-serif text-lg font-bold italic text-slate-900 mb-2">"La claridad es el nuevo poder."</h4>
                <div class="flex items-center mt-2">
                    <div class="w-8 h-8 rounded-full bg-slate-900 text-white mr-2 flex items-center justify-center text-xs font-bold">VN</div>
                    <span class="text-xs font-bold text-slate-700">Visor Noticias</span>
                </div>
            </div>
        </aside>
    </section>

    <!-- HISTORIAS VISUALES -->
    <section class="py-4">
        <div class="flex justify-between items-center mb-4 px-2">
            <h2 class="font-sans font-bold text-slate-900 text-sm uppercase tracking-wider flex items-center">
                <span class="text-lg mr-2">⚡</span> Historias Visuales
            </h2>
        </div>
        <div class="flex space-x-6 overflow-x-auto pb-4 hide-scroll px-2">
            <!-- Placeholders Estáticos (Se mantienen para diseño) -->
            <div class="flex flex-col items-center space-y-2 cursor-pointer min-w-[70px]">
                <div class="story-ring w-16 h-16 p-[2px]">
                    <div class="w-full h-full bg-white rounded-full p-[2px]">
                        <div class="w-full h-full bg-slate-200 rounded-full bg-cover" style="background-image: url('https://source.unsplash.com/random/100x100?tech');"></div>
                    </div>
                </div>
                <span class="text-xs font-medium text-slate-700 truncate w-16 text-center">Tech</span>
            </div>
             <div class="flex flex-col items-center space-y-2 cursor-pointer min-w-[70px]">
                <div class="story-ring w-16 h-16 p-[2px]">
                    <div class="w-full h-full bg-white rounded-full p-[2px]">
                        <div class="w-full h-full bg-slate-200 rounded-full bg-cover" style="background-image: url('https://source.unsplash.com/random/100x100?art');"></div>
                    </div>
                </div>
                <span class="text-xs font-medium text-slate-700 truncate w-16 text-center">Arte</span>
            </div>
             <div class="flex flex-col items-center space-y-2 cursor-pointer min-w-[70px]">
                <div class="story-ring w-16 h-16 p-[2px]">
                    <div class="w-full h-full bg-white rounded-full p-[2px]">
                        <div class="w-full h-full bg-slate-200 rounded-full bg-cover" style="background-image: url('https://source.unsplash.com/random/100x100?world');"></div>
                    </div>
                </div>
                <span class="text-xs font-medium text-slate-700 truncate w-16 text-center">Mundo</span>
            </div>
        </div>
    </section>

    <!-- FEED INFERIOR (2/3 + Sidebar) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Feed (6 posts, offset 4) -->
        <div class="lg:col-span-2 space-y-8">
            <h2 class="font-serif text-2xl font-bold text-slate-900 border-b border-stone-200 pb-2 mb-6">Más Noticias</h2>

            <?php
            $feed_query = new WP_Query( array( 'posts_per_page' => 6, 'offset' => 4 ) );
            if ( $feed_query->have_posts() ) :
                while ( $feed_query->have_posts() ) : $feed_query->the_post();
            ?>
                <article <?php post_class( 'flex flex-col sm:flex-row gap-4 group cursor-pointer border-b border-stone-100 pb-8' ); ?>>
                    <div class="sm:w-1/3 aspect-[4/3] bg-stone-200 rounded overflow-hidden">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <div class="w-full h-full bg-slate-200"></div>
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="sm:w-2/3 flex flex-col justify-center">
                        <span class="text-xs font-bold text-blue-600 uppercase mb-1">
                            <?php 
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) echo esc_html( $categories[0]->name );
                            ?>
                        </span>
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="font-serif text-xl font-bold text-slate-900 mb-2 leading-tight group-hover:text-blue-800 transition-colors">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                        <p class="text-sm text-slate-600 line-clamp-2 mb-3">
                            <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                        </p>
                        <div class="flex items-center text-xs text-slate-400">
                            <span><?php echo get_the_date(); ?></span>
                        </div>
                    </div>
                </article>
            <?php 
                endwhile; 
                wp_reset_postdata(); 
            else : 
            ?>
                <p class="text-center text-slate-500 py-8">No hay más noticias disponibles.</p>
            <?php endif; ?>
        </div>

        <!-- Sidebar Der -->
        <aside class="lg:col-span-1 space-y-8">
            <div class="bg-blue-50 border border-blue-100 p-6 rounded-lg text-center">
                <div class="text-2xl mb-2">📩</div>
                <h3 class="font-serif font-bold text-slate-900 mb-2">El Resumen Visor</h3>
                <p class="text-xs text-slate-600 mb-4">Lo esencial en tu correo.</p>
                <input type="email" placeholder="Tu email" class="w-full px-3 py-2 border border-blue-200 rounded text-sm mb-2">
                <button class="w-full bg-slate-900 text-white font-bold text-sm py-2 rounded hover:bg-slate-800">Suscribirme</button>
            </div>

            <div class="sticky top-20 bg-stone-100 h-64 flex items-center justify-center border border-stone-200 text-stone-400 text-xs font-mono text-center p-4">
                ESPACIO PUBLICITARIO<br>VISOR NOTICIAS<br>(300x250)
            </div>
        </aside>
    </div>
</main>

<?php get_footer(); ?>