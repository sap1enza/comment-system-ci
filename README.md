Comment System (CodeIgniter)
==========================

Simple comment system with register and login, it's not complete yet.

<h2>Done</h2>
<ul>
<li>Signup/Login/Logout</li>
<li>Create, edit and delete comments</li>
<li>Edit Profile</li>
</ul>

<h2>To Do:</h2>
<ul>
  <li>List comments content with pagination</li>
</ul>

------------------------------------------------------------------

<h2>How to Config</h2>

<ul>
  <li>Create and configure the db</li>
  <li>Change the base_url at application/config/config.php line 26</li>
  <li>Set your db settings at application/config/database.php</li>
</ul>

------------------------------------------------------------------

<h2>Screenshots</h2>

<img src="https://image.ibb.co/cSMU38/Screenshot_2.png"/>

------------------------------------------------------------------

<h2>Mysql Dump</h2>

```
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_autor` int(11) NOT NULL,
  `comentario` longtext NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

```


