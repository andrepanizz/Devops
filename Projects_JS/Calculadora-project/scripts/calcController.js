class CalcController {

    constructor(){
        /* $this.e comum dentro de orientação a objetos*/
        this._displayCalc = "0";
        this._dataAtual;
        
    }

    get displayCalc(){

        return this._displayCalc;
        
    }

    set displayCalc(valor) {
        this.displayCalc = valor
    }
}
