import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { KosarComponent } from './kosar/kosar.component';
import { AboutComponent } from './pages/about/about.component';
import { ContactComponent } from './pages/contact/contact.component';
import { HomeComponent } from './pages/home/home.component';
import { MenuComponent } from './pages/menu/menu.component'
import { CsokoladekComponent } from './sharepage/csokoladek/csokoladek.component';
import { CukorkakComponent } from './sharepage/cukorkak/cukorkak.component';
import { RagcsakComponent } from './sharepage/ragcsak/ragcsak.component';
import { SigninComponent } from './components/signin/signin.component';
import { RegisterComponent } from './components/register/register.component';
import { HariboComponent } from './tiles/haribo/haribo.component';
import { MilkaComponent } from './tiles/milka/milka.component';
import { MarsComponent } from './tiles/mars/mars.component';
import { MogyiComponent } from './tiles/mogyi/mogyi.component';

const routes: Routes = [
  {path:'register', component: RegisterComponent},
  {path:'signin', component: SigninComponent},
  {path:'',component:HomeComponent},
  {path:'menu',component:MenuComponent},
  {path:'about',component:AboutComponent},
  {path:'contact',component:ContactComponent},
  {path:'kosar',component:KosarComponent},
  {path:'csokoladek',component:CsokoladekComponent},
  {path:'cukorkak',component:CukorkakComponent},
  {path:'ragcsak',component:RagcsakComponent},
  {path: 'haribo', component:HariboComponent},
  {path: 'milka', component:MilkaComponent},
  {path: 'mars', component:MarsComponent},
  {path: 'mogyi', component:MogyiComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
