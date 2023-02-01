import { Component, OnInit } from '@angular/core';
import { OrderDetailsService } from 'src/app/services/order-details.service';
import { HttpClient } from '@angular/common/http';
@Component({
  selector: 'app-cukorkak',
  templateUrl: './cukorkak.component.html',
  styleUrls: ['./cukorkak.component.css']
})
export class CukorkakComponent implements OnInit {

  constructor(private service: OrderDetailsService, private http: HttpClient) {}
  foodData: any;
  sweet: any;
  ngOnInit(): void {
    this.http.get('http://127.0.0.1:8000/api/gumicuki').subscribe((data) => {
      // handle success

      this.foodData = data;
    });
  }

  putItemToCart(id: number) {
    console.log(this.foodData);
    console.log(id);
    this.sweet = this.foodData[id-1];
    this.service.foodDetails.push(this.sweet);
  }

}

export interface sweetsList {
  ID: number;
  nev: string;
  gyarto: string;
  kategoria: string;
  kep: string;
  reszletek: string;
  ar: number;
  darab: number;
}
