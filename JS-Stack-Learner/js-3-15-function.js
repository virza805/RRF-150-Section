/*******************
 * 
 * Now I start javaScript
 * Functional JavaScript
 ******************* */
function sayTanvir(name){
    return 'Hello, '+ name;
}
//  1. A Function can be stored in a Variable * OK

var hello = sayTanvir;
// var fun = sayTanvir('Hasan virza')
// console.log(fun);
// console.log(hello);
// var anotherHello = hello;
// console.log(anotherHello('Onamica Tanvir'))

//  2. A Function can be stored in an Array * OK

var arr = [1, 2, 3, hello];
arr.push(hello);
console.log(arr);
//  3. A Function can be stored in as an Object Field or Property
var person={
    name:'Tanvir Hasan',
    sayTanvir: hello,
    print:function(){
        console.log('Hi')
    }
}
person
//  4. We can create function as needed * OK
var sum = 10 + (function(){return 50})();
sum;

//  5. We can pass function as arguments * OK
function wow(name, fun){
    return fun(name);
}
var result = wow('HM Tanvir', sayTanvir);
console.log(result);

//  6. We can return function from another function * OK

function base(b){
    return function(n){
        var result = 1;

        for (var i=0; i<b; i++){
            result *= n;
        }

        return result;
    }
}
 
// var power = base(2);
// var result = power(5);

var result = base(3)(5);
result;

/*******************
 * 
 * video =3 9:44 pm 23/3/2020 Now I start javaScript
 * Inner Functional JavaScript
 ******************* */
function outer(){
    var a=10;
    function inner(){
        a;
        console.log('I am inner Function');
    }
    inner();
    console.log('I am Outer function')
}
outer();

function add (a, b){
    function sum(){
        return a+b;
    }function sub(){
        return a-b;
    }function times(){
        return a*b;
    }function div(){
        return a/b;
    }

    return sum() + sub() + times() + div();
}

var result = add( 10, 5);
console.log(result);

/*******************
 * 
 * video =4 10:08 pm 23/3/2020 Now I start javaScript
 * return Functional JavaScript
 ******************* */
function name (firstName, lastName, gender){
    var output;
    if (gender === 'male'){
        output = 'Mr. ' + firstName + ' ' + lastName;
    }else if (gender === 'female'){
        output = 'Ms. ' + firstName + ' ' + lastName;
    }
    return output;
}
var fullnam = name('Tanvir','Hasan', 'male');
console.log(fullnam);

function example(){
    return{
        name : 'Tanvir Hasan',
        skill: ['Java', 'JavaScript'],
        print: function(){
            console.log(this.name, this.skill);
        }
    }
}
var obj =example();
obj.print();
/*******************
 * 
 * video =5 10:08 pm 23/3/2020 Now I start javaScript
 * Anonimus Functional JavaScript
 ******************* */
var arr = [4,5,9,6,3,8,7];
function cbf(a){
    console.log(a);
}
arr.forEach(cbf);

function caller(){
    return function(name){
        return 'Caller Calling Yor ' + name;
    }
}
var x = caller();
var y = x('Tanvir Hasan');
y;

var a= caller()('virza & zavir');
a;

/*******************
 * 
 * video =6 10:08 pm 23/3/2020 Now I start javaScript
 * CallBack Functional JavaScript
 ******************* */
function hello(name, print){
    print(name);
}
hello('Tanvir Hasan', function(name){
    console.log('Hello ' + name);
});
hello('Tanvir Hasan', function(name){
    console.log('Hi, How are you, ' + name + ' ?');
});
/*******************
 * 
 * video =7 10:28 pm 23/3/2020 Now I start javaScript
 * Return Functional JavaScript
 ******************* */
function host(){
    console.log('I am host function..');
    function child(){
        console.log('I am Chiled');
    }
    return child;
}
var a = host();
a();

function greeting(msg){
    function ret(name){
        console.log(msg + ' ' + name);
    }
    return ret;
}

var good = greeting('Good Morning');
var hello = greeting('Hello');

hello('Onamica');
good('Afroza and Nitu');
/*******************
 * 
 * video = 8 11:11 pm 23/3/2020 Now I start javaScript
 * Clorger Functional JavaScript
 * https://jsfiddle.net/
 * 
 ******************* */

 var globleVariable = 'Twinkle Cats';
 function sayName(){
     console.log('Hello, ' + globleVariable);
 }
// console.dir(sayName);
 sayName();

 function greeting(msg){
    function ret(name){
        console.log(msg + ' ' + name);
    }
    return ret;
}

 var hello = greeting('Hello');

 hello('Onamica');
 /*******************
 * 
 * video = 9 10:50 pm 24/3/2020 Now I start javaScript
 * Sort arr Functional JavaScript
 * 
 ******************* */
var arr = [67, 34, 21, 45, 6, 29, 38, 55, 76, 10];
// 6 problem kora...
arr.sort();
console.log(arr);

// all ok decorated big to small
arr.sort(function(a, b){
    return b-a;
});
console.log(arr);

// all ok decorated small to big
arr.sort(function(a, b){
    return a-b;
});
console.log(arr);

// akadik object thaka sort mathod

var islam =[
    {name: 'Tanvir', age: 23},
    {name: 'Hasan', age: 22},
    {name: 'Tanvir Hasan', age: 24},
    {name: 'Onamica Tanvir', age: 18},
    {name: 'Afroza Akter', age: 27},
    {name: 'virza zavir', age: 19},
    {name: 'Md', age: 33},
    {name: 'Al-Amin', age: 26}
]
// sort by age
islam.sort(function(a, b){
    return a.age - b.age;
});
console.log(islam);
// sort by Name
islam.sort(function(a, b){
    if (a.name > b.name){
        return 1;
    }else if (a.name < b.name){
        return -1;
    }else {
        return 0;
    }
});
console.log(islam);

 /*******************
 * 
 * video = 10 11:11 pm 24/3/2020 Now I start javaScript
 * forEach Functional JavaScript
 * 
 ******************* */
var arr = [67, 34, 21, 45, 6, 29, 38, 55, 76, 10];
arr.forEach(function(element, index, arr){
    console.log('Element is = '+ element + ' Index = ' +index + ' arr = ' + arr)
});

// This is peure loop
function loop(arr, callback){
    for(var i=0; i<arr.length; i++){
        callback(arr[i], i);
    }
}
loop(arr, function(element, i){
    console.log('Element is = '+ element + ' Index = ' +i);
});
/*******************
 * 
 * video = 11 12:57 pm 24/3/2020 Now I start javaScript
 * Even or Uneven number Functional JavaScript
 * 
 ******************* */
var arr = [67, 34, 21, 45, 6, 29, 38, 55, 76, 10];

// To get uneven number (this is regular mathood)
var newArr = [];
for (var i=0; i<arr.length; i++){
    if(arr[i]%2 == 1){
        newArr.push(arr[i]);
    }
}
console.log('New Array = ' + newArr);
// To get uneven number with arrange..
var vir = newArr.sort(function(a, b){
    return a-b;
});
console.log(vir);

// To get even number (this is javaScript mathood)

var newarr = arr.filter(function(value){
    return value % 2 == 0;
});
console.log('New Array = ' + newarr)
// To get uneven number with arrange..
var za = newarr.sort(function(a, b){
    return a-b;
});
console.log(za);

// To get even number Make myFilter function (this is Our javaScript mathood)


function myFilter(arr, callback){
    var virza =[];

    for(var i=0; i<arr.length; i++){
        if (callback(arr[i])){
            virza.push(arr[i]);
        }
    }
    return virza;
}
var myArr = myFilter(arr, function(element){
    return element % 2 == 0;
});
console.log('My Array Filter = ' + myArr);

/*******************
 * 
 * video = 12 3:45 pm 24/3/2020 Now I start javaScript
 * Map Functional JavaScript
 * 
 ******************* */
var arr = [67, 34, 21, 45, 6, 29, 38, 55, 76, 10];

// To get uneven number (this is regular mathood)
var mapedArr = [];
for (var i=0; i<arr.length; i++){
        mapedArr.push(arr[i]+2);
}
console.log('Maped Array = ' + mapedArr);
// To get uneven number with arrange..
var virzaMapArr = mapedArr.sort(function(a, b){
    return a-b;
});
console.log(virzaMapArr);

// To get uneven number (this is JavaScript mathood)
var newMapArr = arr.map(function(value){
    return value - 5;
});
console.log('New Maped Array = ' + newMapArr);
// To arrange..
var nwMapArr = newMapArr.sort(function(a, b){
    return a-b;
});
console.log(nwMapArr);

// To Make Map function (this is Our javaScript mathood)

function myMap(arr, callback){
    var mapArr = [];
    for (var i=0; i<arr.length; i++){
        var data = callback(arr[i]);
        mapArr.push(data);
    }
    return mapArr;
}

// use myMap function

var myMapArr = myMap(arr, function(value){
    return value * (-1);
});
console.log('My map Array = ' + myMapArr);
// To get number arrange..
var newMyMapArr = myMapArr.sort(function(a, b){
    return a-b;
});
console.log(newMyMapArr);
/*******************
 * 
 * video = 13 4:15 pm 24/3/2020 Now I start javaScript
 * Reduce Functional JavaScript
 * 
 ******************* */
var arr = [4,5,9,6];
// To use reduce function (this is regular mathood)
var sum = 0;
for (var i=0; i<arr.length; i++){
    sum += arr[i];
}
console.log('Sum = ' + sum);

// To use reduce function (this is JavaScript mathood)

var result = arr.reduce(function(a, b){
    return a+b;
});
console.log('Result = ' +result);
