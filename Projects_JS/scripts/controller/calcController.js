class CalcController {
    //Meu metodo construtor();
    constructor(){
        this._locale = 'pt-BR';
        this._displayCalcEl = document.querySelector("#display");
        this._dateEl = document.querySelector("#data");
        this._timeEl = document.querySelector("#hora");
        this._currentDate; 
        this.initialize();

    }
    //metodo Initialize():
    //RECURSO: set interval: 
        // 1º - Note que chamamos o metodo(this.displayDate))
        // 2º - Chamamos atributo currentDate;
        // 3° - Passamos a function Nativa toLocaleDateString() e o atributo locale
        // 4º - e importante criarmos os atributos e utiliza-lis com o this no initialize;
        // 5º - Os getters and Setters abaixo deixa as coisas bem uteis;
    initialize(){
        //colocando estas 02 linhas antes:

            this.setDisplayDateTime();

            setInterval(()=>{

                this.setDisplayDateTime();

        }, 1000 ); //Qual espaço de tempo entre um e outro;
        
    }

    // evento de botoes aqui abaixo:
    initButtonsEvents(){
        //trabalhando com enventos oneclick();

        //selecione todos aqueles que encontrar
        let buttons = document.querySelectorAll();
        //iniciando;
        addEventListener('buttons'); //adicionando;


    }
    //getters and setters (como recuperamos e como setamos valores)
    //podemos amarrar o innerHTML direto na nossa propriedade;
    /* Vamos criar o Set agora para o displayDate e o Time: */
       
    setDisplayDateTime(){

        this.displayDime = this.currentDate.toLocaleDateString(this._locale, {
            day: "2-digit",
            month: "long",
            year: "numeric"
        });
        this.displayTime = this.currentDate.toLocaleTimeString(this._locale);
    }

    get displayTime(){
        //retornando:
        return this._timeEl.innerHTML;
    }
    
    set displayTime(value){
        //setando o valor
        return this._timeEl.innerHTML = value;
    }

    get displayDate(){
        //retornando o valor;
        return this._dateEl.innerHTML;
    }

    set displayDate(value){
        return this._dateEl.innerHTML = value;
    }

    get displayCalc(){
        return this._displayCalcEl;

    }
    set displayCalc(value){
        return this._displayCalcEl.innerHTML = value;
    }

    get currentDate(){
        return new Date();
    }
    set currentDate(value){
        return this._currentDate = value;
    }
    //finalizado os getters and setters;
      

} //fim da classe;
