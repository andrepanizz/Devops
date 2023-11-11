class CalcController {

    constructor(){
        /* $this.e comum dentro de orientação a objetos*/
        this.displayCalc = "0";
        this.currentDate;
        this.initialize();
      }
    initialize(){
     
        // Document object Model: or DOM
        let displayCalcEl = document.querySelector("#display");
        let dateEl = document.querySelector("#data");
        let timeEl = document.querySelector("#hora");

        displayCalcEl.innerHTML
    }
    
    /*Criando Getters and Setters: */
    get displayCalc(){

        return this._displayCalc;
        
    }

    set displayCalc(valor) {
        this._displayCalc = valor
    }

    get dataAtual(){
        return this._currentDate;
    }

    set dataAtual(valor){
        this._currentDate = valor;
    }
}
