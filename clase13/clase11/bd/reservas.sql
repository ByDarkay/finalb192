create table reservas(
    res_id integer primary key auto_increment,
    res_nombre varchar(50),
    res_celular varchar(40),
    res_correo varchar(50),
    res_presupuesto varchar(50),
    res_destino varchar(40),
    res_fecha date,
    res_observaciones varchar(200)
);