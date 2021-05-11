
let p = document.getElementById('p1')
p.addEventListener("click", function() {
	p.style.color = 'red';
	p = 5 // makes it break the second time!
});

document.getElementById("clickme").addEventListener("click", function() {
	alert(document.getElementById('barney').value)
})

let els = document.getElementsByClassName("abc")

for (let e of els) {
	e.style.color = "red"
}

els = document.querySelectorAll("ul#menu")

let newLI = document.createElement('li')
newLI.innerText = "hello world"

els[0].appendChild(newLI)


let x = 1

if (5 < x) {
	console.log("x is big")
} else { console.log("x is small") ; }

while (x < 10) { x++; }

for (let i = 0; i < 10; i++) {
	// ...
}

let o = {
	age: 99
}

let obj = {
	age: 99,
	getOlder: function() {
		this.age = this.age + 1;
	}
}

obj.age = 99

obj.getOlder()

function add(x, y) {
	let z = x + y;
	if (true) {
		let q = 1
	}
	//console.log(q) // reports an error, because q is no longer in scope
	return z;
}

let sdfsds = add

//console.log(adfsds(5, 7))




console.log(add(5, 7))

class Person {
	getOlder() {
		this.age++;
	}
}

function Person2() {
	
}
Person2.prototype = {
	getOlder: function() { this.age++; }
}

let pp = new Person()
pp = new Person2()

document.getElementById('thecanvas').addEventListener('mousemove', function(ev) {
	let ctx = this.getContext('2d')
	ctx.fillStyle = "red"
	ctx.fillRect(ev.offsetX, ev.offsetY, 10, 10);
	ctx.lineTo(ev.offsetX, ev.offsetY)
	ctx.stroke()
});

async function getStyleCss() {
	let f = await fetch('index.html')
	let t = await f.text()
	alert(t)
}

document.getElementById('clickme2').addEventListener('click', function() {
	getStyleCss();
	setTimeout(function() {
		document.body.style.background = 'blue'
	}, 2500)
})






