function calculaIdade(anos) {
    if (anos < 0) return 'valor invalido'; {
        return `Daqui a ${anos} anos, ${this.nome} terá ${this.idade + anos
            } anos de idade.`;
    }
}

const pessoa1 = {
    nome: 'Eric',
    idade: 22,
};

const pessoa2 = {
    nome: 'Márcia',
    idade: 20,
};

const pessoa3 = {
    nome: 'Jonas',
    idade: 13,
};

console.log(calculaIdade.call(pessoa3, 40));
console.log(calculaIdade.apply(pessoa2, [24.7]));
console.log(calculaIdade.apply(pessoa1, [-1]));