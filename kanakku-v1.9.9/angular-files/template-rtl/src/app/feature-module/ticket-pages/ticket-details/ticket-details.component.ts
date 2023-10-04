import { Component } from '@angular/core';
import { routes } from 'src/app/core/core.index';

@Component({
  selector: 'app-ticket-details',
  templateUrl: './ticket-details.component.html',
  styleUrls: ['./ticket-details.component.scss']
})
export class TicketDetailsComponent {
  public routes = routes;
  country = 'India';
  public Toggledata  = false;
  
  
  
  open() {
    this.Toggledata = !this.Toggledata;
   
  }
}
