set sql_mode=no_auto_value_on_zero;

drop table if exists contactos;
create table contactos (
	id int(15) not null auto_increment,
	nome varchar(255) not null,
	email varchar(100) not null,
	mensagem text,
	primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

drop table if exists users;
create table users (
	id int(15) not null auto_increment,
	email varchar(100) not null,
	password varchar(255) not null,
	primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
