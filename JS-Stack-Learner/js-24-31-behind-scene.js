/*******************
 * 
 * video = 24 & Lecture-1 9:21 pm 25/3/2020 Now I start javaScript
 * Pritotype JavaScript
 * 
 ******************* */
// To Use Pritotype (this is JavaScript mathood)

function Person(name, age){
    this.name = name;
    this.age  = age;
}
Person.prototype.hello = function(){
    console.log('Hello, ' + this.name);
}

var p1 = new Person('Tanvir Hasan', 24);
var p2 = new Person('virza zavir', 12);

console.log(p1);
console.log(p2);

p2.hello();
//console.log(Person.prototype);