const app = new Vue({
    el: '#app',
    data: {
        Petitdejeuners: {
            1: {
                name: 'Menu 1',
                description: 'Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.',
                prix: 3.5,
                photoURL: '../images/petitdej1.PNG'
            },
            2: {
                name: 'Menu 2',
                description: 'Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.',
                prix: 7.5,
                photoURL: '../images/petitdej2.PNG'
            },
            3: {
                name: 'Menu 3',
                description: 'Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.',
                prix: 13,
                photoURL: '../images/petitdej3.PNG'
            }
        },
        Dejeuners: {
            1: {
                name: 'Menu 1',
                description: 'Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.',
                prix: 3.5,
                photoURL: '../images/midi1.PNG'
            },
            2: {
                name: 'Menu 2',
                description: 'Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.',
                prix: 7.5,
                photoURL: '../images/midi2.PNG'
            },
            3: {
                name: 'Menu 3',
                description: 'Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.',
                prix: 13,
                photoURL: '../images/midi3.PNG'
            }
        },
        Diners: {
            1: {
                name: 'Diner 1',
                description: 'Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.',
                prix: 12,
                photoURL: '../images/soir1.PNG'
            },
            2: {
                name: 'Diner 2',
                description: 'Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.',
                prix: 14.5,
                photoURL: '../images/soir2.PNG'
            },
            3: {
                name: 'Diner 3',
                description: 'Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.',
                prix: 17,
                photoURL: '../images/soir3.PNG'
            }
        }
    }
})
