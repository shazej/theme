import { Component } from '@angular/core';
import { routes } from 'src/app/core/core.index';
@Component({
  selector: 'app-general-invoice1',
  templateUrl: './general-invoice1.component.html',
  styleUrls: ['./general-invoice1.component.scss']
})
export class GeneralInvoice1Component {
  public routes = routes;
   public base = '';
   public page = '';
   public last = '';
   header!: boolean; 
   sidebar!: boolean; 
   
 
// eslint-disable-next-line @typescript-eslint/no-explicit-any
   private getroutes(route: any): void {
    
    const splitVal = route.url.split('/');
    this.base = splitVal[1];
    this.page = splitVal[2];
    this.last = splitVal[3];

    if (this.page == 'generalinvoice1') {
      this.header = false;
    } else {
      this.sidebar = false;
   }
   }
   
}
