const test = ()=> import('./components/ExampleComponent.vue');

export const routes = [
    {
        name:'test',
        path:'/test',
        component: test
    }
]