class CalcController {

    constructor(){
        /* $this.e comum dentro de orientação a objetos*/
        this.displayCalc = "0";
        this.currentDate;
        
    }
    /*Criando Getters and Setters: */
    get displayCalc(){

        return this._displayCalc;
        
    }

    set displayCalc(valor) {
        this.displayCalc = valor
    }

    get dataAtual(){
        return this._currentDate;
    }

    set dataAtual(valor){
        this._currentDate = valor;
    }
}
