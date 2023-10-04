import { Component } from '@angular/core';
import { routes } from 'src/app/core/core.index';

@Component({
  selector: 'app-tickets-list-cancelled',
  templateUrl: './tickets-list-cancelled.component.html',
  styleUrls: ['./tickets-list-cancelled.component.scss']
})
export class TicketsListCancelledComponent {
  public routes = routes;
  country = 'India';
  isCollapsed = false;
  public Toggledata  = false;
  users = [
    { name: 'Stationary', checked: false },
    { name: 'Medical', checked: false },
    { name: 'Designing', checked: false }
  ];
  user = [
    { name: 'Stationary', checked: false },
    { name: 'Medical', checked: false },
    { name: 'Designing', checked: false }
  ];
  toggleCollapse() {
    this.isCollapsed = !this.isCollapsed;
  }
  open() {
    this.Toggledata = !this.Toggledata;
   
  }
 
  myDateValue!: Date;
  sort = "sort1"
  
  
 
  priority = 'priority1';
  status = 'status1'
  Action ='status'
  public minDate!: Date;
  public maxDate!: Date;
  
  
}
