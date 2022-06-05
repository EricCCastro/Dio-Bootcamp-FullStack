const orange = {
	price: 2,
};

const apple = {
	price: 1.5,
};

function mapArray(thisArgs) {
	const array = [1, 2, 3, 4, 5];

	return array.map(function (item) {
		return item * this.price;
	}, thisArgs);
}

console.log(mapArray(orange));
console.log(mapArray(apple));