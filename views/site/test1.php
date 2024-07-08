<?php

/** @var yii\web\View $this */

$this->title = 'Test 1 — ooptimo';
?>
<div class="site-test1">
    <div class="body-content">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2>Test 1 — Consumir API</h2>
	            <p>El objetivo es cargar datos de una API externa y mostrarlos en pantalla.</p>
	            <p>Usaremos la "Fake API" <a href="https://jsonplaceholder.typicode.com/" target="_blank">JSONPlaceholder</a> para cargar datos.
				<br>Usa este endpoint: <code>https://jsonplaceholder.typicode.com/posts</code>, y muestra una lista en esta misma página con los datos obtenidos.</p>
	            
	            <h5>Ayuda</h5>
	            <ul>
		            <li>Estamos usando el framework MVC Yii v2: <a href="https://www.yiiframework.com/doc/guide/2.0/en" target="_blank">Guia</a>.</li>
		            <li>La API externa es la de JSONPlaceholder: <a href="https://jsonplaceholder.typicode.com/guide/" target="_blank">Guia</a></li>
		            <li>Los archivos relevantes estan en <code>/controllers</code>, <code>/models</code> y <code>/views</code>.</li>
		            <li>Para los estilos puedes editar directamente el archivo <code>/web/css/site.css</code>.</li>
	            </ul>
            </div>
        </div>
    </div>

	<hr>
	
	<div class="posts-list">
		<div class="row mt-4">
			<h2>Posts</h2>
			<?php foreach ($posts as $post): ?>
			<div class="post flex flex-column">
				<div class="post-header d-flex justify-content-between align-items-center">
				<div class="header-title"><?php echo $post->title ?></div>
				<div class="header-user">User ID: <?php echo $post->userId ?></div>
				</div>
				<div class="post-content">
				<p><?php echo $post->body ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
