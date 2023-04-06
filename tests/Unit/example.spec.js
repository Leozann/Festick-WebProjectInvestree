import { shallowMount, createLocalVue } from '@vue/test-utils'
import VueRouter from 'vue-router'
import CardWeekly from '../../resources/js/src/components/TWEComponent.vue'
import Register from '../../resources/js/src/pages/RegisterPage.vue'

const localVue = createLocalVue()
localVue.use(VueRouter)

const routes = [
  {
    path: '/login',
    name: 'partner-login'
  }
]

let router
beforeEach(() => {
  router = new VueRouter({ routes })
})
describe('TWEComponent.vue', () => {
  it('Render Heading Component', () => {
    const wrapper = shallowMount(CardWeekly)
    expect(wrapper.text()).toEqual("This Week's Event")
  });
})

describe('Register.vue', () => {
  it('Regist', async () => {
    // const router = createRouter({
    //   history: createWebHistory(),
    //   routes: routes,
    // })
    // await router.isReady()

    router.push('/register/create-user')
    const wrapper = shallowMount(Register)
    const email = wrapper.find('input[type="email"]')
    email.setValue('test@gmail.com')

    await wrapper.find('button').trigger('click')
    expect(wrapper.html()).toContain('Hello')
  });


})
