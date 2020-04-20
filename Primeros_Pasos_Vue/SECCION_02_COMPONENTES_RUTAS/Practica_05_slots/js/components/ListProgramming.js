const ListProgramming = {
    name: "ListProgramming",
    template: 
    `
        <div>
            <ul>
                <li v-for="lan in languajes"> {{lan}} </li>
            </ul>
        </div>
    `,
    data: function(){
        return{
            languajes: ["C#","php","js"]
        }
    },
}