const ListPerson = {
    name: "ListPerson",
    template: 
    `
        <div>
            <ul>
                <li v-for="person in people">{{person}} </li>
            </ul>
        </div>
    `,
    data: function(){
        return{
            people: ["Arturo","El Chapo","El Cano"]
        }
    },
}