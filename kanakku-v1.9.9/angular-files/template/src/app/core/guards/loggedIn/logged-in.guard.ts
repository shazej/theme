import { Injectable } from '@angular/core';
import {

  CanActivate,
  Router,
 
  UrlTree,
} from '@angular/router';
import { Observable } from 'rxjs';
import { routes } from '../../core.index';

@Injectable({
  providedIn: 'root',
})
export class LoggedInGuard implements CanActivate {
  constructor(private router: Router) {}

  canActivate(
  
  ):
    | Observable<boolean | UrlTree>
    | Promise<boolean | UrlTree>
    | boolean
    | UrlTree {
    if (localStorage.getItem('authenticated')) {
      this.router.navigate([routes.dashboard]);
      return false;
    } else {
      return true;
    }
  }
}
