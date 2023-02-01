import { Component, OnInit } from '@angular/core';
import { OrderDetailsService } from 'src/app/services/order-details.service';

@Component({
  selector: 'app-kosar',
  templateUrl: './kosar.component.html',
  styleUrls: ['./kosar.component.css'],
})
export class KosarComponent implements OnInit {
  constructor(private service: OrderDetailsService) {}

  itemsInCart: any;

  ngOnInit(): void {}

  ngAfterContentChecked() {
    console.log(this.service.foodDetails);
    this.itemsInCart = this.service.foodDetails;
  }
}

