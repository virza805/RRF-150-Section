// https://nodejs.org/en/download/
// var virza = 'Afroza';
// var age = 22;

// var someting;
// var anything = null;
// console.log(typeof virza);
// console.log(typeof age);
// console.log(virza);

// function zavir (b,c){
//     return b*c;
// }

// console.log(zavir(3,2));

// var vir = function(a,b){
//     return a-b;
// }
// console.log(vir(10,21));

// var likes = ['Afroza','Tanvir','Hasan','Onamica','Nitu','Tanvir Hasan'];

// console.log(likes[0]);

// var nams = [];
// nams[0]='vir';
// nams[1]='za';
// nams[2]='Tanvir';
// nams[3]='zavir';
// console.log(nams);

// for(var i=0; i<nams.length; i++){
//     console.log('Afroza & Onamica with Love ' + nams[i].toUpperCase());
// }

// nams.push('Onamica');
// console.log(nams);
// var likes = ['Afroza','Tanvir','Hasan','Onamica','Nitu','Tanvir Hasan'];

// likes.forEach(print);

// function print(like){
//     console.log(like);
// }

// function operation(a,b, callback){
//     var c = a+b;
//     var d = a-b;
//     callback(c, d);
// }
// function print(c,d){
//     console.log(c,d); 
// }
// function multiply(c,d){
//     console.log(c*d); 
// }

// operation(10,5, print);
// operation(10,5, multiply);
// operation(10,5, function(c,d){
//     console.log('Divid: ' + (c/d));
// });
// operation(10,5, function(c,d){
//     console.log('Totle: ' + (c+d));
// });

// var likes = ['Afroza','Tanvir','Hasan','Onamica','Nitu','Tanvir Hasan'];
// function traverse(likes, callback){
//     for(var i=0; i<likes.length; i++){
//         callback(likes[i]);
//     }
// }

// traverse(likes, function(like){
//     console.log(like.toUpperCase());
// });

// Object----------

var person ={};
person.name = 'virza & zavir';
person.liksembol= '09531805 564.505';
person.print = function(){
    console.log(this.name + '  ' + this.liksembol);
}
person.print();

var person ={
    name: 'virza & zavir',
    liksembol: '09531805 564.505',
    print: function(){
        console.log(this.name + '  ' + this.liksembol);
    }
};
person.name = 'Tanvir & Onamica';
person.print();

var students = [
    {
        name:'Tanvir Hasan',
        class:6,
        like: 'A'
    },
    {
        name:'Hasan',
        class:7,
        like: 'F'
    },
    {
        name:'Tanvir',
        class:8,
        like: 'O'
    },
    {
        name:'MD. AL-AMIN',
        class:9,
        like: 'LOVE-Tanvir'
    }
];

students.forEach(function(student){
    console.log(student.name);
});