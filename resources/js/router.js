import { createWebHistory, createRouter } from "vue-router";
//import sidebarDashboard from "./components/views/sidebarDashboard.vue";
import About from "./components/views/About.vue";
import AuditLog from "./components/views/AuditLog.vue";
import ConstructionSites from "./components/views/ConstructionSites.vue";
import Dashboard from "./components/views/Dashboard.vue";
import Manufactures from "./components/views/Manufactures.vue";
import Materials from "./components/views/Materials.vue";
import Projects from "./components/views/Projects.vue";
import ReportsSites from "./components/views/ReportsSites.vue";
import Settings from "./components/views/Settings.vue";
import Supplier from "./components/views/Supplier.vue";
import Users from "./components/views/Users.vue";



const routes = [
  // {
  //   path: "/dashboard",
  //   name: "sidebarDashboard",
  //   component: sidebarDashboard,
  // },
  {
    path: "/dashboard",
    name: "Dashboard",
    component: Dashboard,
  },
  {
    path: "/auditLog",
    name: "AuditLog",
    component: AuditLog,
  },
  {
    path: "/constructionSites",
    name: "ConstructionSites",
    component: ConstructionSites,
  },
  {
    path: "/manufactures",
    name: "Manufactures",
    component: Manufactures,
  },
  {
    path: "/materials",
    name: "Materials",
    component: Materials,
  },
  {
    path: "/projects",
    name: "Projects",
    component: Projects,
  },
  {
    path: "/reportsSites",
    name: "ReportsSites",
    component: ReportsSites,
  },
  {
    path: "/settings",
    name: "Settings",
    component: Settings,
  },
  {
    path: "/supplier",
    name: "Supplier",
    component: Supplier,
  },
  {
    path: "/users",
    name: "Users",
    component: Users,
  },
  {
    path: "/about",
    name: "About",
    component: About,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router; 