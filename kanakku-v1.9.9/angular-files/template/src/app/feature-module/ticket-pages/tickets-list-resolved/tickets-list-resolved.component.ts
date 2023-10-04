import { Component } from '@angular/core';
import { routes } from 'src/app/core/core.index';

@Component({
  selector: 'app-tickets-list-resolved',
  templateUrl: './tickets-list-resolved.component.html',
  styleUrls: ['./tickets-list-resolved.component.scss']
})
export class TicketsListResolvedComponent {
  public routes =routes
  myDateValue!: Date;
  sort = "sort1"
  isCollapsed = false;
  public Toggledata  = false;
  country = 'sort';
  priority = 'priority1';
  status = 'status1'
  Action ='status'
  public minDate!: Date;
  public maxDate!: Date;

  open() {
    this.Toggledata = !this.Toggledata;
   
  }
  users = [
    { name: 'Barbara Moore', checked: false },
    { name: 'Hendry Evan', checked: false },
    { name: 'Richard Miles', checked: false }
  ];
  
  toggleCollapse() {
    this.isCollapsed = !this.isCollapsed;
  }
  user = [
    { name: 'Stationary', checked: false },
    { name: 'Medical', checked: false },
    { name: 'Designing', checked: false }
  ];
}
