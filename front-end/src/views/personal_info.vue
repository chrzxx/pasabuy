<template>
     <div id ="personal_info" class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm " >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Personal Info</p>
            </div>
           <div> 
               <label for="sub" id="edt1" @click="toggle=!toggle" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label>
           </div>
            
        </div>
        <div id="personal_info" class="text-sm  gap-x-10 pt-8  w-full">
        <form id="myForm" class=" ">
          <div class="flex flex-col items-center gap-y-3 justify-center">
           <div class="w-16 h-16 overflow-hidden rounded-full border-2 border-gray-500"> <img :src="profile" class=" w-full h-full rounded-full ring-2 ring-gray-500"/></div>
            <label for="profile_image" class="font-extrabold cursor-pointer text-blue-800">Change Profile Photo</label>
          </div>
          <input id="profile_image" type="file" @change="change_profile" class="hidden">
        <div  class="text-sm w-full gap-x-10 pt-8 space-y-8
                      xl:w-97
                      2xl:w-97
                      lg:w-97
                    ">
             <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500">NAME</p>
        <span>
        <p >{{firstname}} {{midname}} {{lastname}}</p>
       </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2 ">
        <p class="text-gray-500">PHONE NUMBER</p>
        <span>
        <p>{{phone_number}}</p>
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">WORK</p>
        <span>
        <p>{{work}}</p>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">GENDER</p>
        <span>
        <p>{{gender}}</p>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">BIRTHDAY</p>
        <span>
        <p>{{birdate}}</p>
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">Language</p>
        <span>
        <p>{{language}}</p>
        </span>
         </span>
          </div>
       
        </form>
        </div>
        <div v-if="toggle" class=" fixed bg-black z-100 h-max w-screen   bg-opacity-75 overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class=" bg-white ring-1  ring-gray-300  p-5 w-full rounded-xl
             2xl:w-97 2xl:ml-5
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
          <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-9 lg:ml-9 2xl:ml-9">Update Personal Info</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle=false"> Close</p>
          </div>
           
           <div class=" ">
            <div class="flex flex-col   space-y-4
            ">
                <div class="flex flex-col"><span class="ml-2 text-gray-500 font-bold text-sm">Firstname</span> 
                <input id="f_name"   type="text" :value="firstname" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div>
                <div class="flex flex-col"><span class="ml-2 text-gray-500 font-bold  text-sm">Middlename</span> 
                <input id="m_name" type="text" :value="midname" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                </div>
                <div class="flex flex-col"><span class="ml-2 text-gray-500 font-bold  text-sm">Lastname</span> 
                <input id="l_name" type="text" :value="lastname" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                </div>
                <div class="flex flex-col"><span class="ml-2 text-gray-500 font-bold  text-sm">Phone number </span> 
                <input id="p_number" type="number" :value="phone_number" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                </div>
                <div class="flex flex-col"><span class="ml-2 text-gray-500 font-bold  text-sm">Work </span> <input id="work" type="text" :value="work" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                </div>
                <span class="ml-2 text-gray-500 font-bold  text-sm">Gender</span>
                <div class=" space-x-4 ml-4">
                  <span class="space-x-2">
                  <span><input type="radio" value="Male" id="male" name="gender" /></span>
                  <label for="male ">Male</label>
                  </span>
                  <span class="space-x-2">
                  <span><input type="radio" value="Female" id="female" name="gender" /></span>
                  <label for="female">Female</label>
                  </span>
              </div>
                 <div class="flex flex-col "><span class="ml-2 text-gray-500 font-bold  text-sm">Birthday</span>  <input  type="text" id="b_date"  :value="birdate"   class="focus:outline-none rounded-xl w-full h-10 pl-2 bg-transparent bg-gray-200" 
                  ></div> 
                <div class="flex flex-col"><span class="ml-2 text-gray-500 font-bold  text-sm">Language</span> <input type="text" id="language" :value="language" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/></div>
             
            </div>
           <div class="flex justify-between mt-10 space-x-4 items-center">
              <button @click="toggle=false" class="px-3 h-6 w-full bg-white ring-1 ring-black focus:outline-none   rounded-2xl">Cancel</button>
              <button @click="toggle=false ,save_data()" class="px-5 bg-red-buttons text-white focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
            </div>
          </div>
          </div>
        </div>
    </div>

    </div>
    
</template>
<script>
export default {
  name:'personal',
 
data(){
    return{
      toggle:false,
      avatar:null,
      disabled: 0,
      hidden:false,
      profile:'img/yami.jpg',
      show:true,
      show2:true,
      edit2:false,
      message:'yeah',
      firstname:'Juan',
      midname:'B',
      lastname:'Delacruz',
      phone_number:'09021050502',
      work:'Krusty Crab',
      gender:'Male',
      language:'Bicol',
      birdate:'January,26 1999',
    }
  
},
methods:
    {
     save_data(){
        this.firstname=document.getElementById('f_name').value;
        this.midname=document.getElementById('m_name').value;
        this.lastname=document.getElementById('l_name').value;
        this.phone_number=document.getElementById('p_number').value;
        this.work=document.getElementById('work').value;
        this.birdate=document.getElementById('b_date').value;
         this.language=document.getElementById('language').value;
        this.gender=document.querySelector('input[name="gender"]:checked').value;
        
     },
     change_profile(e){
        const file=e.target.files[0]
        this.profile=URL.createObjectURL(file);
    },

    
}
}

</script>
