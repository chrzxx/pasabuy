<template>
    <div class="pt-6 bg-gray- font-nunito">
        <div id="helpCreateAcc" class="flex items-center justify-center w-full px-3 pb-16 pr-20 vs:px-0 sm:pr-14 sm:px-0 mt-9 ">
            <div class="w-full overflow-hidden font-bold rounded-xl ">
                <div class="pb-1">
                    <h1 class="text-2xl uppercase sm:text-xl md:text-xl vs:text-base">Interpretation and Definitions</h1>
                </div> 
                <div class="pt-2 vs:pt-0">
                <!----sub section 1---->
                    <div class="py-3">
                        <h1 class="text-3xl font-bold text-blue-800 sm:text-2xl vs:text-lg md:text-2xl">Interpretation</h1>                        
                    </div>
                    <div class="w-full text-align-left justify">
                            <div>
                                <p class="font-normal text-justify sm:text-sm vs:text-xs md:text-sm dv:text-base">The words of which the initial letter 
                                    is capitalized have meanings defined under the following 
                                    conditions. The following definitions
                                    shall have the same meaning regardless
                                    of whether they appear in singular or in plural.
                                </p>
                            </div>
                    </div>

                <!----sub section 2---->
                    <div class="flex py-3">
                        <h1 class="text-3xl font-bold text-blue-800 sm:text-2xl vs:text-lg md:text-2xl">Definitions</h1>
                    </div>
                    <div class="w-full font-normal text-align-left justify sm:text-sm vs:text-xs md:text-sm dv:text-base">
                            <div>
                                <p>For the purposes of this Privacy Policy:</p>
                                 <ul class="space-y-2 text-justify list-disc list-outside pl-7">
                                    <li>Account means a unique account created for You to access our Service or parts of our Service.</li>
                                    <li>Company (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to pasaBUY.</li>
                                    <li>Cookies are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</li>
                                    <li>Country refers to: Philippines</li>
                                    <li>Device means any device that can access the Service such as a computer, a cellphone or a digital tablet.</li>
                                    <li>Personal Data is any information that relates to an identified or identifiable individual.</li>
                                    <li>Service refers to the Website.</li>
                                    <li>Service Provider means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</li>
                                    <li>Third-party Social Media Service refers to any website or any social network website through which a User can log in or create an account to use the Service.</li>
                                    <li>Usage Data refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</li>
                                    <li>Website refers to pasaBUY, accessible from https://pasabuybscs.herokuapp.com/</li>
                                    <li>You means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>
                                 </ul>
                            </div>
                    </div>
                </div>
            </div><!----->
        </div>
    </div>
</template>
<style>
    #journal-scroll::-webkit-scrollbar {
        width: 5px;
        cursor: pointer;
      }
  
    #journal-scroll::-webkit-scrollbar-track {
        background-color: rgba(229, 231, 235, var(--bg-opacity));
        cursor: pointer;
    }
  
    #journal-scroll::-webkit-scrollbar-thumb {
        cursor: pointer;
        background-color: rgba(185, 28, 28)
    
    }
   
#iCheck{
  font-size:16px;
  color:rgb(22, 22, 141);
}
#iMessage{
  font-size:24px;
  color:rgb(22, 22, 141);
}

</style>
<script>
export default {
    data(){  
        return{
            isOpen: false,
            isOpen1: false,
            show: false,
        }
    },
    
    created: function () {
        document.body.style.backgroundColor = "rgb(235,235,235)";
  },
}
</script>