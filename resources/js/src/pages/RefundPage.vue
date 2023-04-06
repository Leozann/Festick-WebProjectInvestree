<template lang="">
    <div class="tabel">
        <h1>Form Refund</h1>
        <form action="">
            <label >User Id</label>
            <input type="text" v-model="userid" >
    
            <label >Transaction Id</label>
            <input type="text" v-model="transactionid" >
    
            <label >Metode Refund</label>
            <select v-model="selected">
                <option disabled value="">Please select one</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
            </select>

            <label >Reference Number</label>
            <input type="number" v-model="number" >

    
        <div class="submit">
            <button>Submit</button>
        </div>
        </form>
    </div>

</template>

<script>
</script>

<style scoped lang="scss">
    form {
    max-width: 420px;
    margin: 30px auto;
    background: white;
    text-align: center;
    padding: 40px;
    border-radius: 10px;
  }
  label {
    /* color: #aaa; */
    display: inline-block;
    
    /* margin: 25px 0 15px;
    font-size: 0.6em;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: bold; */
  }
  input, select {
    display: block;
    border-radius: 7px;
    border-color: #1C6758;
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px;
    /* padding: 10px 6px;
    width: 100%;
    box-sizing: border-box;
    border: none;
    border-bottom: 1px solid #ddd;
    color: #555; */
  }


  select{
    width: 177px;
    height: 21px;
    border-radius: 7px;
    border-color: #1C6758;
  }

  input[type="checkbox"] {
    display: inline-block;
    width: 16px;
    margin: 0 10px 0 0;
    position: relative;
    top: 2px;
  }
  button {
    background: #1C6758;
    border: 0;
    padding: 10px 20px;
    margin-top: 20px;
    color: white;
    border-radius: 20px;
  }
  .submit {
    text-align: center;
  }

  .tabel{
        width: 470px;
        border-radius: 20px;
        background:  white;
        color: #0faf87;
        text-align: center;
        padding: 50px 0;
        margin: 40px auto;
        border-width: 5px;
        border-style: solid;
        border-color: #0faf87;
        
    }

h1{
    text-align: center;
    color: black;
}
</style>