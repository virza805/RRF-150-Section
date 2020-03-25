/*******************
 * 
 * video = 27 & Lecture-1-4 9:21 pm 25/3/2020 Now I start javaScript
 * Behind the Scene JavaScript
 * 
 ******************* */
// To Use Behind the Scene (this is JavaScript mathood)
// to see Execution context process

var name = 'Onamica , Nitu , Afroza ';

function A(){
    B();
    var a = 'I am in function A';
    console.log(a);
    
}

function B(){
    C();
    var b = 'I am in function B';
    console.log(b);
    
}

function C(){
    console.log('Hello, ' + name);
    
    var c = 'I am in function C';
    console.log(c);
    
}
A();
/*******************
 * 
 * video = 28 & Lecture-5 9:21 pm 25/3/2020 Now I start javaScript
 * Expression vs Declaration JavaScript
 * 
 ******************* */
// To Use Declaration (this is JavaScript mathood)

declaretion();

function declaretion(){
    console.log('I am callbale from anywhere...');
    
}
declaretion();

// To Use Expression (this is JavaScript mathood)
console.log(express);

var express = function(){
    console.log('I am function expression....');
    
}
console.log(express);

express();
/*******************
 * 
 * video = 29 & Lecture-6 9:23 pm 25/3/2020 Now I start javaScript
 * Scoping JavaScript
 * 
 ******************* */
// To Use Scoping (this is JavaScript mathood)

var a = 100;
console.log(a);

function A(){
    var a = 300;
    console.log(a);
    function B(){
        var b= 200;
        console.log(a);
        function C(){
            console.log(a);  
        }
        C();
    }
    B();
    
}
var b= 200;
A();
/*******************
 * 
 * video = 31 & Lecture-8 9:23 pm 25/3/2020 Now I start javaScript
 * Scoping Chain And this keyword JavaScript
 * 
 ******************* */
// To Use Scoping Chain And this keyword (this is JavaScript mathood)

var obj = {
    name: 'little Star',

    print: function(){
        console.log('Twinkle Twinkle ' + this.name);
        //console.log(this); 
        function another(){
            console.log(this);
            
        }
        another();
    }
}
//obj.print();
var person = {
    name: 'How I Wonder'
}
person.print = obj.print;
person.print();