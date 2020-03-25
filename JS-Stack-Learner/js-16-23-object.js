/*******************
 * 
 * video = 16 & Lecture-1 12:40 pm 25/3/2020 Now I start javaScript
 * Object JavaScript
 * 
 ******************* */

// var obj = {};
// var obj1 = new object;

// console.log(obj);
// console.log(obj1);
// To get Object (this is JavaScript mathood)
var book = {
    name: 'Functional JavaScript',
    author: 'Micbael Fogus',
    publisher: 'O\'Reilly',
    page: 250,

    print: function(){
        console.log(this.name, this.author);
    }
}

console.log('publisher Year: ' + book.publisherdYear );
book.publisherdYear = 2010;
console.log('publisher Year: ' + book.publisherdYear );

book['price'] = 30;
console.log('Price = ' + book.price)
// console.log(book);
// book.print();

// console.log('Book Name: ' + book.name);
// console.log('Author Name: ' + book['author']);
for (var props in book){
   // console.log(props);
    console.log(props + ' = ' + book[props]);
}

/*******************
 * 
 * video = 17 & Lecture-2 6:11 pm 25/3/2020 Now I start javaScript
 * Class JavaScript
 * 
 ******************* */
// To Use Class (this is JavaScript mathood)

// function Person(){
//     console.log('I have constructed.....');
// }
// var p1 = new Person();
// to be capital latter in javaScript Class

function Person(name, email){
    this.name = name;
    this.email= email;
    this.print= function(){
        console.log('Name: ' + this.name);
    }
}
var p1 = new Person('Tanvri Hasan', 'tanvir.9531805@gmail.com');
var p2 = new Person('Onamica Tanvir', 'onamicatanvir@gmail.com');
var p3 = new Person('virza', 'virza805@gmail.com');
var p4 = new Person('MD.Al-Amin','01mdalamin1@gmail.com');
var p5 = new Person('Tanvir Onamica','tanvironamica@gmail.com');
var p6 = new Person('Nitu','nitu@gmail.com');

var people = [p1, p2, p3, p5, p6];
console.log(p1.name);
console.log(p4.email);
console.log(p6);
console.log(people);
// to do short out
people.forEach(function(person){
    console.log('Email: '+ person.email);
    person.print();
});

for (var props in p1){
    console.log('Properties = '+ props);
}
// Make bookClass
function Book(name, author, price){
    this.name = name;
    this.author = author;
    this.price = price;
}
var book = new Book('Functional JavaScript', 'Micbael Fogus', 30);

console.log(book.constructor);
/*******************
 * 
 * video = 18 & Lecture-3 6:58 pm 25/3/2020 Now I start javaScript
 * this keyword JavaScript
 * 
 ******************* */
// To Use this keyword (this is JavaScript mathood)

// var obj = {
//     name: 'virza',
//     print: function(){
//         console.log(this);
//     }
// }
// function myFunc(){
//     function inner(){
//         console.log(this);
//     }
//    new inner();
// }

// obj.print();



// var person = {
//     name: 'Tanvir Hasan',

//     print: function(){
//         //console.log(this);
        
//         console.log('Hello, '+ this.name);
//     }
// }
// person.print();

// var myname = person.name;
// console.log(myname);

// var myPrint = function(){
//     console.log(this);
//     console.log('Hello, '+ this.name);
// }
// var myPrint = person.print.bind(person);
// console.log(myPrint);

// myPrint();

// Deferent Example

function add (num){
    return this.value + num;
}

var obj = {
    value: 10
}
var obj2 = {
    value: 20
}
var obj3 = {
    value: 30
}

var binded = add.bind(obj3);
var result = binded(60);
result;
// end bind function
var person = {
    name:'Tanvir Hasan',

    print: function(){
        setTimeout(function(){
            console.log(this);
            console.log('Hello, ' + this.name);
            
            
        }.bind(this), 2000);
    }
}
person.print();

/*******************
 * 
 * video = 19 & Lecture-4 9:21 pm 25/3/2020 Now I start javaScript
 * Pritotype JavaScript
 * 
 ******************* */
// To Use Pritotype (this is JavaScript mathood)

// function PersonPTyp(name, age){
//     this.name = name;
//     this.age  = age;

//     this.hello = function(){
//         console.log('Hello, ' + this.name);
        
//     }
// }
// function Person(name, age){
//     this.name = name;
//     this.age  = age;
// }
// Person.prototype.hello = function(){
//     console.log('Hello, ' + this.name);
// }

// var p1 = new Person('Tanvir Hasan', 24);
// var p2 = new Person('virza zavir', 12);

// console.log(p1);
// console.log(p2);

// p2.hello();
//console.log(Person.prototype);

/*******************
 * 
 * video = 20 & Lecture-5 2:46 pm 25/3/2020 Now I start javaScript
 * bind-call-apply JavaScript
 * I have a Lack
 ******************* */
// To Use bind (this is JavaScript mathood)

// function printMe(){
//     console.log('Hello, ' + this.name);
// }

// var obj1 = {
//     name:'Tanvir Hasan',
//     age:24
// }
// var obj2 = {
//     name:'Onamica Nitu',
//     age:18
// }
// var binded1 = printMe.bind(obj1);
// var binded2 = printMe.bind(obj2);
// binded1();
// binded2();

// To Use call (this is JavaScript mathood)
//printMe.call(obj1);

// To Use apply (this is JavaScript mathood)

function add (a, b){
    return (a + b)* this.c;
}

var obj1 = {c:3}
var obj2 = {c:5}

var res = add.call(obj1, 10, 5);
res;
// Now you can see dafenation call to apply
var res2 = add.apply(obj2, [10, 5]);
res2;
/*******************
 * 
 * video = 21 & Lecture-6 2:46 pm 25/3/2020 Now I start javaScript
 * inharitant JavaScript
 *  I have a Lack
 ******************* */
// To Use inharitant (this is JavaScript mathood)
// function Person(){
//     this.name = "Tanvir Hasan"
// }
// function Teacher(){
//     Person.call(this);
//     this.subject = "JavaScript";
// }

// var teacher = new Teacher();
// var name = teacher.name;
// console.log(name);

function Person(name){
    this.name = name;
}

Person.prototype.printName = function(){
    console.log('Name: ' +this.name);
}
Person.prototype.another = function(){
    console.log('This is an another function');
}
function Student (name, id){
    Person.call(this, name);
    this.id = id;
}

Student.prototype = Object.create(Person.prototype);
//Object.setPrototypeOf(Student.prototype, Person.prototype);
Student.prototype.constructor = Student;
var student = new Student('Onamica Afroza', 1991);
Person.prototype.printName = function(){
    console.log(this.name + 'Not Copied');
}
student.printName();
/*******************
 * 
 * video = 22 & Lecture-7 2:46 pm 25/3/2020 Now I start javaScript
 * new keyword JavaScript
 * 
 ******************* */
// To Use new keyword (this is JavaScript mathood)
function Animal(name){
    this.name = name;
}
Animal.prototype.printName = function(){
    console.log(this.name);
    
}

function myNew(constructor){
    var obj = {};
    Object.setPrototypeOf(obj, constructor.prototype);
    var argsArray = Array.prototype.slice.apply(arguments);
    constructor.apply(obj, argsArray.slice(1));
    return obj;
}
var cat = myNew(Animal, 'Cat');
cat.printName();

// var cat = new Animal('Cat');
// var god = new Animal('Dog');

// cat.printName();

var Person = function(name, age){
    this.name = name;
    this.age = age;
}

var p1 = myNew(Person, 'Tanvir Hasan', 24);

/*******************
 * 
 * video = 23 & Lecture-8 6:06 pm 25/3/2020 Now I start javaScript
 * _proto_ vs Prototype JavaScript
 * 
 ******************* */
// To Use _proto_ vs Prototype (this is JavaScript mathood)
function Obj(a, b){
    this.a = a;
    this.b = b;
}

function Obj2(a, b, c){
    P1.call(this, a, b);
    this.c = c;
}
Obj2.prototype = Object.create(P1.prototype);

function Obj3(){
    Obj2.call(this, 10, 15, 20);
}
Obj3.prototype = Object.create(Obj2.prototype);

//var obj1 = new Obj(1, 2);
var obj2 = new Obj2(4, 5, 6);
var obj3 = new Obj3();


