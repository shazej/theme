import { Component } from '@angular/core';
import { routes } from 'src/app/core/helpers/routes/routes';

@Component({
  selector: 'app-invoice-one',
  templateUrl: './invoice-one.component.html',
  styleUrls: ['./invoice-one.component.scss']
})
export class InvoiceOneComponent {
  // eslint-disable-next-line @typescript-eslint/no-inferrable-types
  public routes = routes;
  public base = '';
  public page = '';
  public last = '';
  stickysidebar!: boolean; 
 
  

// eslint-disable-next-line @typescript-eslint/no-explicit-any
  private getroutes(route: any): void {
   
   const splitVal = route.url.split('/');
   this.base = splitVal[1];
   this.page = splitVal[2];
   this.last = splitVal[3];

   if (this.page == 'invoiceone') {
      this.stickysidebar = false;
   } else {
    this.stickysidebar = false ;
  }
  }
  
  
}
