class CalcController {
    constructor(){
        //this faz referencia
        this._displayCalc 
        this.currentDate;
        this.initialize();

        // atributo privado utiliza acesso privado
        //Os tipos de Emcapsulamento:
        /**
         * - Public
         * - Protected
         * - Private
         */
    }

        initialize(){    //estamos nos referindo a um metodo que esta no meu proprio objeto;
            //DOM: Document Object Model ou Modelo de objetos de Documentos:

            


        }
    //Criando os Getters and Setters pra cada um destes 02 atributos;

    get displayCalc(){
        //recuperamos as informações;
        return this._displayCalc;

    }

    //se eu quiser mudar o valor do atributo displayCalc
    // guardamos dentro do display calc
    set displayCalc(valor){
        this.displayCalc = valor;
    }
//////////////////////////////////////////////////////////

    get currentDate(){
        return this._dataAtual;
    }
    
    set _dataAtual(data){
        this._dataAtual = data;
    }



}
