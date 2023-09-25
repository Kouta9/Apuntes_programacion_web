DOM:
Las siglas DOM significan Document Object Model, o lo que es lo mismo, la estructura del documento HTML. Una página HTML está formada por múltiples etiquetas HTML, anidadas una dentro de otra, formando un árbol de etiquetas relacionadas entre sí, que se denomina árbol DOM (o simplemente DOM).

![[Pasted image 20230925112703.png]]

En Javascript, cuando nos referimos al DOM nos referimos a esta estructura de árbol, mediante la cuál podemos acceder a ella y modificar los elementos del HTML desde Javascript, añadiendo nuevas etiquetas, modificando o eliminando otras, cambiando sus atributos HTML, añadiendo clases, cambiando el contenido de texto, etc...




Modificar atributos


Puedes establecer un atributo en un elemento al establecer la propiedad con el mismo nombe. Por ejemplo, para cambiar el src de una <img>:

```
imgEl.src = "http://www.dogs.com/dog.gif";
```

Adicionalmente, también puedes utilizar el método `setAttribute`, así:

```
imgEl.setAttribute("src", "http://www.dogs.com/dog.gif");
```


Si quieres quitar un atributo, debes hacerlo con `removeAttribute`, como para quitar el atributo `disabled` de un botón, habilitándolo:

```
imgEl.removeAttribute("disabled");
```

Modificar estilos


Puedes cambiar estilos igual que como cambias los atributos, al acceder a la propiedad style del elemento, y establecr la propiedad correspondiente. Por ejemplo, para cambiar el color:

```
headingEl.style.color = "hotpink";
```

Recuerda usar notación "camelCase" en los nombres de las propiedades de CSS de varias palabras, puesto que los guiones no son nombres de propiedad válidos en JS:

```
headingEl.style.backgroundColor = "salmon";
```

Modificar nombres de clases


Para agregar una clase a un elemento, puedes establecer la propiedad className:

```
mainEl.className = "warning";
```

Eso anulará las otras clases existentes, así que debes hacer esto en su lugar si solo quieres añadir a la lista de clases:

```
mainEl.className += " warning";
```

En los navegadores más recientes, puedes utilizar la funcionalidad de classList en su lugar:

```
mainEl.classList.add("warning");
```

Modificar HTML interno o texto


Para reemplazar por completo el contenido de un elemento con una cadena arbitraria de HTML, utiliza innerHTML:

```
mainEl.innerHTML = "los gatos son <strong>los más lindos</strong>";
```

Si no necesitas pasar etiquetas HTML, debes utilizar textContent en su lugar:

```
mainEl.textContent = "los gatos son los más lindos";
```


Crear elementos desde cero


Hay todo un conjunto de funciones que puedes utilizar para crear elementos completamente nuevos y agregarlos a la página.
Para crear un nuevo elemento, utiliza el acertadamente llamado createElement:

```
var imgEl = document.createElement("img");
```

Para anexarlo a la página, llama appendChild en el elemento padre de destino:

```
document.body.appendChild(imgEl);
```

Del mismo modo, también puedes utilizar insertBefore, replaceChild, removeChild e insertAdjacentHTML.


















JQUERY:

jQuery es una librería desarrollada en 2006 por John Resig que permite añadir una capa de interacción AJAX entre la web y las aplicaciones que desarrollemos controlando eventos, creando animaciones y diferentes efectos para enriquecer la experiencia de usuario.  

jQuery es un software libre y de código abierto (posee un doble licenciamiento bajo la Licencia MIT y la Licencia Pública General de GNU v2). Cuenta con un diseño que facilita la navegación por un documento y seleccionar elementos DOM proporcionando a los desarrolladores de aplicaciones web complementos que agilizan el desarrollo de proyectos. Esto permite a los desarrolladores centrarse en lo importante y crear abstracciones para interacción y animación de bajo nivel, efectos avanzados y widgets temáticos de alto nivel sin invertir tiempo en desarrollar complejos algoritmos y métodos que los controlen desde cero y generando menos código que las aplicaciones hechas con JS puro. Por ese motivo jQuery es muy popular y podemos verlo en muchas páginas web. 



Características de jQuery (ejemplos de sintaxis)
Para entender cómo funciona jQuery debemos atender a sus características. 

Constructor jQuery.  El constructor es una función sobrecargada que nos permite acceder a los elementos del DOM correspondientes a la consulta que realizamos. Por ejemplo: 

jQuery('h2').css('color', ‘blue’’);

Nota: Seguro que ya has visto múltiples ejemplos donde se usa $ en lugar de jQuery. Pues bien, $ es una alias de jQuery.  Por ejemplo, tomando los ejemplos anteriores usando el alias sería:

$('h2').css('color', 'red');

Pero hay que tener en cuenta que, aunque usar $ es más cómodo que escribir jQuery, esto no siempre es válido cuando se utilizan otras librerías que usan la función $, ya que para esto se emplea el noconflict de jQuery.

Trabajar por grupos(Iteración implícita). Los métodos en jQuery pueden realizar consultas mediante iteración implícita. Es decir, buscando múltiples coincidencias y aplicando modificaciones para cada elemento en una única instrucción, Por ejemplo: 
$('h2') Nos devuelve el conjunto de los títulos nivel 2 (h2), pero si por ejemplo quisiéramos cambiar el color a un gris oscuro (#333), esto lo podríamos hacer de la siguiente manera:


$.each($('h2'), function() {

$(this).css("color", "#333");

}); 
Diseñado para realizar consultas a través del DOM. jQuery nos permite realizar consultas CSS, xPath y transversales.Por ejemplo:
$('h2 + p').css('color', '#946900');

$('h2 + p').css('font-style', 'italic');

Con esto indicamos que todo párrafos (p) inmediatamente seguidos(+) de un título nivel 2(h2), van a tomar el color de la letra café y el estilo de la fuente será del tipo itálica.

Es un sistema modular donde podemos anidar consultas o tareas de una manera sencilla. Por ejemplo:

$('h2').css('color','red');
$('h2').text ('Cambiando el contenido a todos los elementos h2');

Ahora lo comparamos con el siguiente código:

$('h2')

            .css ('color','red')

            .text ('Cambiando el contenido a todos los elementos h2');