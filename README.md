#### [CodeIgniter Sunrise](https://github.com/sjlu/CodeIgniter-Sunrise) has a LESS and JS compiler for better dependency management.

## Introduction

CodeIgniter Bootstrap kick starts the development process of the web development process by including Twitter Bootstrap into CodeIgniter. It also includes certain libraries such as AWS and Facebook in-case you are developing applications requiring those SDKs. So stop writing the same code over again and start working on your idea.

CodeIgniter Bootstrap follows the path where it lazy loads libraries. Though the project footprint may be large, the memory footprint will still be extremely light. Try not to autoload libraries as it does not follow the CodeIgniter convention (though some libraries do make sense to autoload).

## Installation

Derived from CodeIgniter, read [CodeIgniter Installation](http://codeigniter.com/user_guide/installation/index.html) for how to install using this [zipball](https://github.com/sjlu/CodeIgniter-Bootstrap/zipball/master) instead. If you're not familiar with CodeIgniter, I suggest reading the [CodeIgniter Tutorial](http://codeigniter.com/user_guide/tutorial/index.html) on how to get started and read the [wiki](https://github.com/sjlu/CodeIgniter-Bootstrap/wiki) for more information.

## Flavors

* The `master` branch contains the original and includes [Twitter Bootstrap](http://twitter.github.io/bootstrap/) and [Font Awesome](http://fortawesome.github.io/Font-Awesome/).
* The `cdn` branch contains the same libraries but is hosted by [BootstrapCDN](http://www.bootstrapcdn.com/).

## Documentation

Check out the [Wiki](https://github.com/sjlu/CodeIgniter-Bootstrap/wiki) for more information.

## Releases

This is currently a very active project, there are no projected release locks planned. All changes will be latest in master and may be unstable.

## License

MIT with [CodeIgniter Amendments](http://codeigniter.com/user_guide/license.html)

## Other

If you're looking for a LESS and/or JS compilier, try out another flavor like [CodeIgniter Sunrise](https://github.com/sjlu/CodeIgniter-Sunrise).


* Creacion :
		git clone https://github.com/sjlu/CodeIgniter-Bootstrap.git
* Subo a github el proyecto :
		cd Codeigniter-Bootstrap
		git remote add origen https://github.com/rick25/CI-bootstrap.git
		git add .
		git commit -m "Primer Commit"
		git push origen master
* Para Heroku
		git add .
		git commit -m "Modificado para heroku"
		heroku login
		heroku create
		git push heroku master
		heroku open

* Modifico el archivo core/Common.php en la linea 257 :
		$config_modify = $_config[0] =& $config;
		return $config_modify;

* Creo la tabla articulos :
		PARA POSTGRES :
		CREATE TABLE articulos
		(
		  id SERIAL PRIMARY KEY,
		  titulo TEXT NOT NULL,
		  contenido TEXT NOT NULL
		);

		PARA MYSQL :

		CREATE TABLE articulos
		(
			id INTEGER PRIMARY KEY AUTO_INCREMENT,
			titulo VARCHAR(30) NOT NULL,
			contenido VARCHAR(140) NOT NULL
		)ENGINE=InnoDB AUTO_INCREMENT=1;

* Luego de las modificaciones ejecuto :
		git status
		git add .
		git commit -m "Agregado las funcionalidades de listar, crear, mostrar, modificar del controlador articulos"
		git push origen master
