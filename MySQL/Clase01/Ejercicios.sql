/*//// CONSULTAS SIMPLES ////*/

select * from movies;	/*SIMPLES-01*/
select * from actors;	/*SIMPLES-02*/
select title from movies;	/*SIMPLES-03*/
select first_name, last_name from actors;	/*SIMPLES-04*/
select * from movies where release_date>'2000-01-01';	/*SIMPLES-05*/
select * from movies where release_date>'2000-01-01' and release_date<'2010-01-01';	/*SIMPLES-06*/
select * from movies where title like 'toy story';	/*SIMPLES-07*/ /*select * from movies where title like '%toy story%';*//*aca busco todo lo que tenga "x"*/
select * from actors where first_name like 'mark';	/*SIMPLES-08*/
select * from actors where first_name not like 'mark';	/*SIMPLES-09*/
select * from actors where first_name like 'mark' or first_name like 'sam';	/*SIMPLES-10*/
select * from movies where (release_date<'2000-01-01' or release_date>'2009-01-01') and id>10;	/*SIMPLES-11*/

/*//// ORDER BY & LIMIT////*/

select * from actors order by first_name;	/*ORDER-012*/
select * from actors order by first_name, last_name;	/*ORDER-013*/
select * from movies order by release_date asc;	/*ORDER-014*/
select * from movies where release_date>'2000-01-01' order by title;	/*ORDER-015*/
select * from movies limit 5;	/*ORDER-016*/
select * from movies where release_date>'2000-01-01' limit 3;	/*ORDER-017*/
select * from movies where release_date>'2000-01-01' order by title limit 3;	/*ORDER-018*/
select * from actors limit 1;	/*ORDER-019*/
select * from actors order by id desc limit 1;	/*ORDER-018*/