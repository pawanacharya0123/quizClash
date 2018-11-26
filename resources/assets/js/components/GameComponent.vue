<template>
    <div >  
         
        <div class="panel panel-warning">
            <div class="panel-heading">
                <span class="pull-left">Level:- {{level}}</span> 
                <span class="pull-right">Current_score:- {{score}}</span>
            </div>
           
             <div class="text-center">     
                Life:- {{life}}    
            </div>
        </div>
        <stopwatch-component v-if="clock"  @applied="check('ooo', question.id)"></stopwatch-component>
        <div class="que" v-if="main">
            
                <h4>
                    <p id="question" class="text-center" v-text="question.question" style="display: block;"></p>   
                </h4>
                <!-- <p class="text-center">Question Difficulty/ID:</p><br> -->
                <a id="ans1" class="btn  btn-block  btn-yellow" href="#"  v-text="question.ans1" @click="check(question.ans1, question.id)"></a> <br>
                <a id="ans2" class="btn  btn-block  btn-yellow" href="#"  v-text="question.ans2" @click="check(question.ans2, question.id)"></a> <br>
                <a id="ans3" class="btn  btn-block  btn-yellow" href="#"  v-text="question.ans3" @click="check(question.ans3, question.id)"></a> <br><hr><br>
            
        </div>

        <div class="modal is-active" v-if="seen && correct!=='dead'" @click="nextQuestion">
            <div class="modal-background"></div>
            <div class="modal-content">
                <p class="text-center" >
                    <br> 
                    <span style="font-size: 48px; color: Dodgerblue;">
                    <strong>{{correct}}</strong> <br> 
                    </span> 
                    <br> 
                </p>
            </div>
        </div>
        <div class="modal is-active" v-if="correct==='dead'" @click="goBack">
            <div class="modal-background"></div>
            <div class="modal-content">
                <p class="text-center" >
                    <br> 
                    <span style="font-size: 48px; color: Dodgerblue;">
                    <strong>{{correct}}</strong> <br> 
                    </span> 
                    <br> 
                </p>
            </div>
        </div>

    </div> 
</template>

<script>
    import StopwatchComponent from './StopwatchComponent.vue'

    export default {
        components: {StopwatchComponent},
        props:['id'
        //  , 'score_props'
        //  ,'life_props'
        ],
        data(){
            return{
                level: '',
                life: '',
                score: '',
                question: [],
                correct:'',
                seen: false,
                main: true,
                clock: true
            }
        },
        methods: {
            check: function(ans, que_id){
                this.clock= false;
                // alert(que_id);
                //pause the stop-watch once
                 axios.get('/answercheck/'+que_id+'/'+ans)
                 .then((response) => {
                    this.correct = response.data;
                    this.main= false;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
                this.seen= true;
            },
            nextQuestion(){
                //call the child
                if(this.correct=== 'over'){
                    this.goBack();
                }
                axios.get('/vuelife/'+this.id)
                    .then(({data})=> this.life= data);
                axios.get('/vuescore/'+this.id)
                    .then(({data})=> this.score= data);
                axios.get('/vuelevel/'+this.id)
                    .then(({data})=> this.level= data);
                this.seen= false;
                this.correct='';
                this.question=[];
                this.main= true;
                this.clock= true;

                axios.get('/vuebata/'+this.id)
                    .then(({data})=> this.question= data);
                
                //reset the stopwatch
            },
            goBack(){
                this.question=[];
                this.correct='';
                this.seen= false;
                this.main= false;
                // session().flash('lifeline','No lives:wait');
                window.location.href = '/categories';

            }
        },
        created() {
            // this.user= this.name_props;
            axios.get('/vuebata/'+this.id)
                .then(({data})=> this.question= data); 
            // //call the child
            axios.get('/vuelife/'+this.id)
                .then(({data})=> this.life= data);
            axios.get('/vuescore/'+this.id)
                .then(({data})=> this.score= data);
            // this.level= this.question.difficulty;
            axios.get('/vuelevel/'+this.id)
                .then(({data})=> this.level= data);
        }
    }
</script>
<style scoped>
    .btn-yellow {
    background: rgb(250, 255, 140);
    color: #574500;
    border: none;
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    color: #666666;
    }
    .btn-yellow:hover, .btn-yellow:focus {
    background: rgb(252, 255, 179);
    }
    .btn-yellow:active {
    background: rgb(247, 255, 71);
    }
    #question{
        text-decoration-color: black;
    }
</style>

