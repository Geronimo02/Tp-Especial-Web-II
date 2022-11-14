# Tp-Especial-Web-II

# API URL 
http://localhost/TP/tp/api/libros

# METODO GET POR ID 
/TP/tp/api/libros/ID

# METODO POST 
/TP/tp/api/libros
    BODY
    {
        "id_libro": ,
        "imagen": "",
        "nombre": "",
        "precio": 
    }
# METODO DELETE POR ID 
/TP/tp/api/libros/ID

# METODO PUT POR ID 
/TP/tp/api/libros/ID

# ORDENAR DE MANERA ASD Y DESC (POR PRECIO)
/TP/tp/api/libros?sort=precio&order=ASC

/TP/tp/api/libros?sort=precio&order=DESC

# METODO DE FILTRADO DE LOS LIBROS (POR PRECIO)
/TP/tp/api/libros?filter=precio
