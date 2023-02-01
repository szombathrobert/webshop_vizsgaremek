import { NgModule, CUSTOM_ELEMENTS_SCHEMA} from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavbarComponent } from './sharepage/navbar/navbar.component';
import { FooterComponent } from './sharepage/footer/footer.component';
import { HomeComponent } from './pages/home/home.component';
import { MenuComponent } from './pages/menu/menu.component';
import { AboutComponent } from './pages/about/about.component';
import { ContactComponent } from './pages/contact/contact.component';
import { HeaderComponent } from './header/header.component';
import { KosarComponent } from './kosar/kosar.component';
import { HttpClientModule } from '@angular/common/http';
import { AdminComponent } from './admin/admin.component';
import { CsokoladekComponent } from './sharepage/csokoladek/csokoladek.component';
import { RagcsakComponent } from './sharepage/ragcsak/ragcsak.component';
import { CukorkakComponent } from './sharepage/cukorkak/cukorkak.component';
import { SigninComponent } from './components/signin/signin.component';
import { RegisterComponent } from './components/register/register.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { FlexLayoutModule } from '@angular/flex-layout';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { AngularMaterialModule } from './angular-material.module';
import { HariboComponent } from './tiles/haribo/haribo.component';
import { MilkaComponent } from './tiles/milka/milka.component';
import { MogyiComponent } from './tiles/mogyi/mogyi.component';
import { MarsComponent } from './tiles/mars/mars.component';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    FooterComponent,
    HomeComponent,
    MenuComponent,
    AboutComponent,
    ContactComponent,
    HeaderComponent,
    KosarComponent,
    AdminComponent,
    CsokoladekComponent,
    RagcsakComponent,
    CukorkakComponent,
    SigninComponent,
    RegisterComponent,
    HariboComponent,
    MilkaComponent,
    MogyiComponent,
    MarsComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    BrowserAnimationsModule,
    FlexLayoutModule,
    FormsModule,
    ReactiveFormsModule,
    AngularMaterialModule,
  ],
  providers: [],
  bootstrap: [AppComponent],
  schemas: [CUSTOM_ELEMENTS_SCHEMA]
})
export class AppModule { }
