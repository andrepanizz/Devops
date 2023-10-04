class CalcController {
    constructor(){
        /** @param Important: Podemos amarrar o Inner.HTML que e o conteudo de um elemento, direto na nossa prorpiedade; */
        /**
         * @param Nota que colocamos nossos seletores como atributos no metodo construtor();
         */
        this._locale = 'pt-BR';
        this._displayCalcEl = document.querySelector("#display");
        this._dateEl = document.querySelector("#data");
        this._timeEl = document.querySelector("#hora");
        this._currentDate;
        this.initialize();
        // atributo privado utiliza acesso privado
        //Os tipos de Emcapsulamento:
        /**
         * - Public
         * - Protected
         * - Private
         */
        }
        initialize(){    
            //propriedade chamada setInterval();
                this.setDisplayDateTime()
            
                setInterval(()=>{
                    this.setDisplayDateTime();
                }, 1000);
        }
            
                      
            
            //estamos nos referindo a um metodo que esta no meu proprio objeto;
            //DOM: Document Object Model ou Modelo de objetos de Documentos:

            /** Como precisamos manipular estes caras, seria interresante guardamos em variaveis: */
            //let displayCalcEl = document.querySelector("#display");
            //let dateEl = document.querySelector("#data");
            //let timeEl = document.querySelector("#hora");
            //Nota: como fazemos para manipular o HTML

            //displayCalcEl.innerHTML = "4567"; // innerHTML e um propriedade que significa:
            // Pegue este objeto que estou falando, displayCalcEl que o "0" da calculadora.
            // coloque uma informação la dentro no formato HTML
            //this._dateEl.innerHTML = "01/05/2020";
            //this._timeEl.innerHTML = "00:00";
            //document.querySelector, pega o elemento pelo css (#);
            //document.elementByid, pega o elemento pelo seu ID 
            //////////////////////////////////////////////////////////////////////////////////////////////////

            //Temos algumas classes Nativas chamada Date();
        


    setDisplayDateTime(){
        this.displayDate = this.currentDate.toLocaleDateString(this._locale);
        this.displayTime = this.currentDate.toLocaleTimeString(this._locale);

    }  
    //Criando os Getters and Setters pra cada um destes 02 atributos;
    get displayTime(){
        return this._timeEl.innerHTML;
    }

    set displayTime(value){
        return this._timeEl = value;
    }

    get displayDate(){
        return this._dateEl.innerHTML;
        
    }

    set displayDate(value){
        return this._dateEl = value;

    }


    get displayCalc(){
        //recuperamos as informações;
        return this._displayCalcEl.innerHTML;

    }

    //se eu quiser mudar o valor do atributo displayCalc:
    // guardamos dentro do display calc
    set displayCalc(value){
        this._displayCalcEl.innerHTML = value;
    }
//////////////////////////////////////////////////////////

    get currentDate(){
        return new Date();
    }
    
    set _dataAtual(data){
        this._currentDate = data;
    }

}
