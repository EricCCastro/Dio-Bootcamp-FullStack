function verificarPalindromo(string){
    if(!string) return;

    console.log(string === string.split('').reverse().join(''));
}
verificarPalindromo('ama')


function verificarPalindromo2(string){
    if(!string) return;
    if(!string.length) return;

    for (var i=0; i < string.length / 2; i++){
        if(string[i]!== string[string.length - 1 - i]){
            return console.log(false)
        }
    }
    return console.log(true);
}

verificarPalindromo2('asa')