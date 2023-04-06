import LandingPage from '../src/pages/LandingPage.vue';
import LoginPage from '../src/pages/LoginPage.vue'
import RegisterPage from '../src/pages/RegisterPage.vue'
import AboutusPage from '../src/pages/AboutusPage.vue'
import MyAccountPage from '../src/pages/MyAccountPage.vue'
import TicketPage from '../src/pages/TicketMenuPage.vue'
import DetailTicketPage from '../src/pages/TicketDetailPage.vue'
import TransactionPage from '../src/pages/FinalTransactionPage.vue'
import MenuComponent from '../src/components/DashboardComponent/MenuComponent.vue'
import UserComponent from '../src/components/DashboardComponent/UserComponent.vue'
import UserEditComponent from '../src/components/DashboardComponent/UserEditComponent.vue'
import TicketComponent from '../src/components/DashboardComponent/TicketComponent.vue'
import TicketCreateComponent from '../src/components/DashboardComponent/TicketCreateComponent.vue'
import TicketEditComponent from '../src/components/DashboardComponent/TicketEditComponent.vue'
import CatalogueComponent from '../src/components/DashboardComponent/CatalogueComponent.vue'
import CatalogueCreateComponent from '../src/components/DashboardComponent/CatalogueCreateComponent.vue'
import CatalogueEditComponent from '../src/components/DashboardComponent/CatalogueEditComponent.vue'
import TransactionComponent from '../src/components/DashboardComponent/TransactionComponent.vue'
import TransactionCreateComponent from '../src/components/DashboardComponent/TransactionCreateComponent.vue'
import TransactionEditComponent from '../src/components/DashboardComponent/TransactionEditComponent.vue'
import TransactionPendingComponent from '../src/components/DashboardComponent/TransactionPendingComponent.vue'
import TransactionSuccessComponent from '../src/components/DashboardComponent/TransactionSuccessComponent.vue'
import TransactionRefundComponent from '../src/components/DashboardComponent/TransactionRefundComponent.vue'
import DetailTransactionPage from '../src/pages/DetailTransactionPage.vue'
import HistoryTransactionPage from '../src/pages/HistoryTransactionPage.vue'

const routes = [
    {
        path: '/',
        component: LandingPage,
        name: 'landing_page'
    },
    {
        path: '/login',
        component: LoginPage,
        name: 'login_page'
    },
    {
        path: '/register',
        component: RegisterPage,
        name: 'register_page'
    },
    {
        path: '/aboutus',
        component: AboutusPage,
        name: 'aboutus_page'
    },
    {
        path: '/myaccount',
        component: MyAccountPage,
        name: 'myaccount_page'
    },
    {
        path: '/ticket-menu',
        component: TicketPage,
        name: 'ticket_page'
    },
    {
        path: '/ticket-detail/:id',
        component: DetailTicketPage,
        name: 'ticketDetail_page'
    },
    {
        path: '/ticket-detail/:id/transaction',
        component: TransactionPage,
        name: 'transaction_page'
    },
    {
        path: '/admin-show-user',
        component: UserComponent,
        name: 'admin_user_page'
    },
    {
        path: '/admin-edit-user',
        component: UserEditComponent,
        name: 'admin_edit_user_page'
    },
    {
        path: '/admin-show-ticket',
        component: TicketComponent,
        name: 'admin_ticket_page'
    },
    {
        path: '/admin-create-ticket',
        component: TicketCreateComponent,
        name: 'admin_create_ticket_page'
    },
    {
        path: '/admin-edit-ticket/:id',
        component: TicketEditComponent,
        name: 'admin_edit_ticket_page'
    },
    {
        path: '/admin-show-catalogue',
        component: CatalogueComponent,
        name: 'admin_catalogue_page'
    },
    {
        path: '/admin-create-catalogue',
        component: CatalogueCreateComponent,
        name: 'admin_create_catalogue_page'
    },
    {
        path: '/admin-edit-catalogue/:id',
        component: CatalogueEditComponent,
        name: 'admin_edit_catalogue_page'
    },
    {
        path: '/admin-show-transaction',
        component: TransactionComponent,
        name: 'admin_transaction_page'
    },
    {
        path: '/admin-create-transaction',
        component: TransactionCreateComponent,
        name: 'admin_create_transaction_page'
    },
    {
        path: '/admin-edit-transaction/:id',
        component: TransactionEditComponent,
        name: 'admin_edit_transaction_page'
    },
    {
        path: '/pending-transaction',
        component: TransactionPendingComponent,
        name: 'admin_pending_transaction_page'
    },
    {
        path: '/success-transaction',
        component: TransactionSuccessComponent,
        name: 'admin_success_transaction_page'
    },
    {
        path: '/refund-transaction',
        component: TransactionRefundComponent,
        name: 'admin_refund_transaction_page'
    },
    {
        path: '/admin',
        component: MenuComponent,
        name: 'admin_page'
    },
    {
        path: '/historytransaction',
        component: HistoryTransactionPage,
        name: 'history_transaction'
    },
    {
        path: '/transaction-detail/:id',
        component: DetailTransactionPage,
        name: 'transactionDetail_page'
    },
]

export default routes;
