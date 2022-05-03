{{-- SPECIAL PAGE --}}
<html style="background-color: #000">
    <body>   
        <style>
            .input {
                margin-top: 20%;
                margin-left: 35%;
            }
            textarea{
                font-size: 3em;
                background: #000;
                border: none;
                color: rgb(20, 255, 0);
                font-family: sans-serif;                
            }

            .invt {
                position: absolute;
                top:5%;
                left: 40%;
            }
        </style>

        <img src="images/INVT.png" alt="" width="10%" class="invt">
        <form class="input" action="" method="POST">
            @csrf
            <textarea 
            class="width-100 textarea border-none" 
            name="body" 
            placeholder="Who are you?"
            required            
        ></textarea>          
        </form>
    </body>
</html>