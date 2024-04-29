const search = document.getElementById("search");
const freelanc = document.getElementById("freelancers");
console.log(search);
search.addEventListener("input", function () {
    var searchQuery = this.value;
    getData(searchQuery);
 
});

function getData(searchQuery) {
    fetch(`/search?search=${searchQuery}`)
        .then((response) => response.json())
        .then((data) => {
            freelanc.innerHTML = "";
            data.freelancers.forEach((freelancer) => {
                freelanc.innerHTML += `   <div class="px-4 bg-white border-solid border-2 border-gray-600  relative flex w-full  flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
        <div class="relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 overflow-hidden text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border">
            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80" alt="Tania Andrew" class="relative inline-block h-[58px] w-[58px] !rounded-full object-cover object-center" />
            <div class="flex w-full flex-col gap-0.5">
                <div class="flex items-center justify-between">
                    <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">${freelancer.user.prenom} ${freelancer.user.nom}</h5>
                    <div class="flex items-center gap-5">
                       <form action="/favorie/${freelancer.id}" method="get">
    
    <button type="submit" class="bg-green-700 hover:bg-green-900 px-4 py-2 rounded-full font-bold text-gray-50">Favorie</button>
</form>
                    </div>
                </div>
                <p class="block font-sans text-base antialiased font-light leading-relaxed text-blue-gray-900">${freelancer.profession.profession} @Khadamati</p>
            </div>
        </div>
        <div class="p-0 mb-6">
            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                "I found solution to all my design needs from Creative Tim. I use
                them as a freelancer in my hobby projects for fun! And its really
                affordable, very humble guys !!!"
            </p>
        </div></div>
    `;
            });

            console.log(data);
        })
        .catch((error) => {
            console.error("Error fetching data:", error);
        });
}

getData('');

