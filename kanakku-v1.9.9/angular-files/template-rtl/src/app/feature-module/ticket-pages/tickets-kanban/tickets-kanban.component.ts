import { Component } from '@angular/core';
import { routes } from 'src/app/core/core.index';

@Component({
  selector: 'app-tickets-kanban',
  templateUrl: './tickets-kanban.component.html',
  styleUrls: ['./tickets-kanban.component.scss']
})
export class TicketsKanbanComponent {
  priority = "selectpriority"
  myDateValue!: Date;
  sort = "sort1"
  public minDate!: Date;
  public maxDate!: Date;
  selectstatus = "select"
  public tickets: Array<string> = [];
  country = 'India';
  isCollapsed = false;
  public Toggledata  = false;
  public routes = routes;
  status = 'status1'
 
  
  
  
 

 
  open() {
    this.Toggledata = !this.Toggledata;
   
  }
  users = [
    { name: 'Barbara Moore', checked: false },
    { name: 'Hendry Evan', checked: false },
    { name: 'Richard Miles', checked: false }
  ];
  user = [
    { name: 'Stationary', checked: false },
    { name: 'Medical', checked: false },
    { name: 'Designing', checked: false }
  ];
  
  toggleCollapse() {
    this.isCollapsed = !this.isCollapsed;
  }

}
